<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecuriyController extends AbstractController
{
    /**
     * @Route("/securiy", name="securiy")
     */
    public function index(): Response
    {
        return $this->render('securiy/index.html.twig', [
            'controller_name' => 'SecuriyController',
        ]);
    }
}
