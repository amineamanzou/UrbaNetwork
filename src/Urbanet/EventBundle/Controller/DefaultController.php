<?php

namespace Urbanet\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UrbanetEventBundle:Default:index.html.twig', array('name' => $name));
    }
}
