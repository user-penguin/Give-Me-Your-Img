<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorizeController extends AbstractController {
    /**
     * @Route("/")
     */
    public function number()
    {
        return $this->render('index.html.twig');
    }
}