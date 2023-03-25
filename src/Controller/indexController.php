<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Product;
use App\Form\AddToCartType;
use App\Form\LoginType;
use App\Form\OrderFormType;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class indexController extends AbstractController
{
    //Homepage
    #[Route('/home', name: 'app_home')]
    public function home(CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->findAll();
        return $this->render('index/index.html.twig', [
        'categories' => $category,
        ]);
    }

    //Contact-page
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('index/contact.html.twig', [
        ]);
    }

    //Category with all the category
    #[Route('/allCategory', name: 'app_allCategory')]
    public function allCategory(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        $category = ['name' => 'Alle'];

        return $this->render('index/category.html.twig', [
            'products' => $products,
            'category'=>$category,
        ]);
    }

    //Category with a specific category
    #[Route('/category/{id}', name: 'app_category')]
    public function category(ProductRepository $productRepository, CategoryRepository $categoryRepository, int $id): Response
    {
        $products = $productRepository->findBy(['category'=>$id]);
        $category = $categoryRepository->find($id);

        return $this->render('index/category.html.twig', [
        'products' => $products,
        'category'=>$category,
        ]);
}

    //AddToCart
    #[Route('/addToCart/{id}', name: 'app_addToCart')]
    public function addToCart(Request $request, Product $product): Response
    {

        $form = $this->createForm( AddToCartType::class);
        $form->handleRequest($request);

        //Session starten
        $session = $request->getSession();

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "amount" and "size" keys
            $data = $form->getData();

            $session->set('productForm', $data);
            $session->set('productId', $product);
            return $this->redirectToRoute('app_orderForm');
        }

        $addProduct = $session->get('productForm');
        return $this->renderForm('index/addToCart.twig',[
            'addToCarForm' => $form,
            'product' => $product,
        ]);
    }

    //orderForm
    #[Route('/orderForm', name: 'app_orderForm')]
    public function orderForm(Request $request,  OrderRepository $orderRepository, ProductRepository $productRepository): Response
    {
        $session = $request->getSession();
        $addProduct = $session->get('productForm');
        $productId = $session->get('productId');
        $products = $productRepository->find($productId);

        $url = $request->getUri();
        $productPrice = $addProduct['amount'] * $products->getPrice();

        $order = new Order();
        $order->setOrderStatus('Bezig');
        $order->setDate(new \DateTime());
        $order->setTime(new \DateTime());
        $order->setAmount($addProduct['amount']);
        $order->setProduct($productRepository->find($productId));
        $order->setTotalPrice($productPrice);
        $form = $this->createForm( OrderFormType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $orderRepository->save($data);

            $this->addFlash('succes', 'Bedankt van je aankoop. Je bestelling is geplaats!');
            return $this->redirectToRoute('app_orderForm');
        }

        return $this->renderForm('index/orderForm.html.twig', [
            'orderForm' => $form,
            'product' => $products,
            'addProduct' => $addProduct,
            'url' => $url,
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(Request $request): Response
    {

        $form = $this->createForm( LoginType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            return $this->redirectToRoute('app_orderFormAdmin');
        }

        return $this->renderForm('index/login.html.twig',[
            'loginForm' => $form,
        ]);
    }

    //orderForm
    #[Route('/orderForm/admin', name: 'app_orderFormAdmin')]
    public function orderFormAdmin(Request $request,  OrderRepository $orderRepository): Response
    {
        $order = $orderRepository->findAll();
        $url = $request->getUri();

        return $this->renderForm('index/orderForm.html.twig', [
        'orders' => $order,
        'url' => $url,
        ]);
    }
}






