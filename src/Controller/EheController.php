<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EheController extends AbstractController
{
    #[Route('/ehe', name: 'app_main')]
    public function index(): JsonResponse
    {
        return $this->render('base.html.twig');
    }
}
