<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function Front_Products_List()
    {
        return $this->render('front/index.html.twig');
    }

}
