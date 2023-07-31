<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartnersController extends AbstractController
{
    #[Route('/partenaires', name: 'app_partners')]
    public function index(): Response
    {
        return $this->render('partners/partners.html.twig', [
            'controller_name' => 'PartnersController',
        ]);
    }
}
