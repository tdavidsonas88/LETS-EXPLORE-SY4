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
     * @Route("/hello", name="hello_page")
     */
    public function hello(Request $request){

        $someVar = $request->query->get('someVar');

        return $this->render('hello_page.html.twig', [
            'some_variable_name' => $someVar
        ]);
    }
}
