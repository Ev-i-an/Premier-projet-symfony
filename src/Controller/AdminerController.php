<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminerController extends AbstractController
{
    #[Route('/adminer', name: 'app_adminer')]
    public function index(): Response
    {
        return $this->render('adminer/index.html.twig', [
            'controller_name' => 'AdminerController',
        ]);
    }
}
