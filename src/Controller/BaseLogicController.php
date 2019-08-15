<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseLogicController extends AbstractController {
    /**
     * @Route("/")
     */
    public function number()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/login")
     */
    public function getLoginPage() {
        return $this->render('login.html.twig');
    }
}