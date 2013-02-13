<?php

namespace Urbanet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UrbanetUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
