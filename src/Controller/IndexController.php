<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route(
        path: '/index/{name}', 
        name: 'app_index', 
        requirements: ['name' => '\d+'] 
    )]
    public function index(string $name = "Anonymous"): Response
    {
        return new Response(content: "Hello " . $name . " !");
    }
}