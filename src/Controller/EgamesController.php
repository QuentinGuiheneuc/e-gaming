<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EgamesController extends AbstractController
{
    /**
     * @Route("/egames", name="egames")
     */
    public function index(): Response
    {
        return $this->render('egames/index.html.twig', [
            'controller_name' => 'EgamesController',
        ]);
    }
}
