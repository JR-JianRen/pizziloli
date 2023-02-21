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
}





