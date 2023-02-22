<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class indexController extends AbstractController
{
//Homepage
    #[Route('/home')]
    public function number(): Response
    {

        return $this->render('index.html.twig', [

        ]);
    }

//Contactpage
    #[Route('/contact')]
    public function number2(): Response
    {
        
        return $this->render('contact.html.twig', [

        ]);
    }

//Categorie_page
    #[Route('/menu')]
    public function number3(): Response
    {
        $test = ['1','2','3','4','5','6'];
        return $this->render('categorie.html.twig', [
        'products' => $test,
        ]);
    }
}





