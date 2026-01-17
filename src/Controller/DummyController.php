<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy/{name}', name: 'app_dummy')]
    public function index(string $name): Response
    {
        return $this->render('dummy/index.html.twig', [
            // Correction ici : le nom de la clé doit correspondre à {{ name }} dans le twig
            'name' => $name, 
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        // Correction ici : suppression du "a" après le point-virgule
        $text = "Hello This is home !"; 
        $tabYear = [2020, 2021, 2022, 2023];
        
        return $this->render('dummy/home.html.twig', [
            'text' => $text,
            'years' => $tabYear
        ]);
    }

      #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('dummy/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('dummy/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}