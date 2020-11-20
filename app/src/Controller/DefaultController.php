<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/say-my-name/{name}", name="default_say_my_name")
     */
    public function sayMyName($name)
    {
        return $this->render('default/sayMyName.html.twig', [
            'name' => $name,
        ]);
    }
}
