<?php

namespace App\Controller;

use App\Entity\Amount;
use App\Entity\Order;
use App\Form\OrderProductType;
use App\Form\OrderViewType;
use App\Repository\AmountRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

//Contactpage
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {

        return $this->render('index/contact.html.twig', [

        ]);
    }

//Categorie_page2
    #[Route('/menuAll', name: 'app_menuAll')]
    public function menuAll(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        $category = ['name' => 'Alle'];

        return $this->render('index/categorie.html.twig', [
            'products' => $products,
            'category'=>$category,
        ]);
    }

//Categorie_page
    #[Route('/menu/{id}', name: 'app_menu')]
    public function menu(ProductRepository $productRepository, CategoryRepository $categoryRepository, int $id): Response
    {
        $products = $productRepository->findBy(['category'=>$id]);
        $category = $categoryRepository->find($id);

        return $this->render('index/categorie.html.twig', [
        'products' => $products,
        'category'=>$category,
        ]);
}

//OrderView
    #[Route('/orderView', name: 'app_orderView')]
    public function insert(Request $request,  OrderRepository $orderRepository): Response
    {
        $order = new Order();
        $form = $this->createForm( OrderViewType::class, $order);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $orderr = $form->getData();
            $orderRepository->save($orderr);
            return $this->redirectToRoute('app_orderView');
        }
        return $this->renderForm('index/orderView.html.twig', [
            'form' => $form,
        ]);
    }

    //OrderProduct
    #[Route('/orderProduct/{id}', name: 'app_orderProduct')]
    public function insert2(Request $request,  AmountRepository $amountRepository,ProductRepository $productRepository, int $id): Response
    {
        $order = new Amount();
        $form = $this->createForm( OrderProductType::class, $order);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $orderr = $form->getData();
            $amountRepository->save($orderr);
            return $this->redirectToRoute('app_orderProduct');
        }

        $product = $productRepository->find($id);

        return $this->renderForm('index/orderForm.html.twig', [
            'form' => $form,
            'product' => $product,
        ]);
    }
}






