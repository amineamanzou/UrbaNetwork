<?php

namespace Urbanet\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UrbanetMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
