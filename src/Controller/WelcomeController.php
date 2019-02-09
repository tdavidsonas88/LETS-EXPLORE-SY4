<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    /**
     * @Route("/hello/{name}", name="hello_page", requirements={"name"="[A-Za-z]+"})
     * @param string $name
     */
    public function hello(string $name = 'CodeReviewVideos'){
        return $this->render('hello_page.html.twig', [
            'person_name' => $name
        ]);
    }
}
