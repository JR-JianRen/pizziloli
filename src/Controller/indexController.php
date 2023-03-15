<?php

namespace App\Controller;

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
    #[Route('/home')]
    public function home(CategoryRepository $categoryRepository): Response
    {

        $category = $categoryRepository->findAll();
        return $this->render('index/index.html.twig', [
        'categories' => $category,

        ]);
    }

//Contactpage
    #[Route('/contact')]
    public function contact(): Response
    {
        
        return $this->render('index/contact.html.twig', [

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

//OrderForm
    #[Route('/orderForm', name: 'app_orderForm')]
    public function insert(Request $request,  OrderRepository $orderRepository): Response
    {
        $order = new Order();
        $form = $this->createForm(OrderFormType::class, $order);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $order = $form->getData();
            $orderRepository->save($order);
            return $this->redirectToRoute('app_orderForm');
        }
        return $this->renderForm('index/orderForm.html.twig', [
            'form' => $form,
        ]);
    }
}





