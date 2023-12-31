<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavBarController extends AbstractController
{
    #[Route('/navbar', name: 'app_nav_bar')]
    public function index(): Response
    {
        return $this->render('nav_bar/navbar.html.twig', [
            'controller_name' => 'NavBarController',
        ]);
    }
}
