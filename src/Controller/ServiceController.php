<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service/{name}', name: 'app_service')]
    public function index($name): Response
    {
        return $this->render('service/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/service/show/{name}', name: 'show_service')]
    public function showService($name): Response
    {
        return new Response("<h1>$name</h1>");
    }

}
