<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class indexController extends AbstractController
{
//Homepage
    #[Route('/home')]
    public function home(CategoryRepository $categoryRepository): Response
    {

        $category = $categoryRepository->findAll();
        return $this->render('index.html.twig', [
        'categories' => $category,

        ]);
    }

//Contactpage
    #[Route('/contact')]
    public function contact(): Response
    {
        
        return $this->render('contact.html.twig', [

        ]);
    }

//Categorie_page
    #[Route('/menu')]
    public function menu(): Response
    {

        $test = ['1','2','3','4','5','6'];
        return $this->render('categorie.html.twig', [
        'products' => $test,
        ]);
    }
}





