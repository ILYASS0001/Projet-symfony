<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy/{name}', name: 'app_dummy')]
    public function index(string $name = "user"): Response
    {
        return $this->render('dummy/index.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        $text = "Hello This is home !";
        $tabYear =[2020,2021,2022,2023];
        return $this->render('dummy/home.html.twig', [
            "text" => $text,
            "tabYear" => $tabYear
        ]);
    }

    
    
}
