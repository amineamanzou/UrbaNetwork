<?php

namespace Urbanet\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UrbanetAnnonceBundle:Default:index.html.twig', array('name' => $name));
    }
}
