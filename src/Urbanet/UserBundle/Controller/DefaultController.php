<?php

namespace Urbanet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UrbanetUserBundle:Default:index.html.twig');
    }
    
    public function nosartistesAction()
    {
        return $this->render('UrbanetUserBundle:Default:NosArtistes.html.twig');
    }
}
