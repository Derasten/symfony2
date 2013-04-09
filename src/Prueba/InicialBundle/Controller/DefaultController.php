<?php

namespace Prueba\InicialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($city)
    {
        return $this->render('PruebaInicialBundle:Default:index.html.twig',array('city' => $city));
    }
}
