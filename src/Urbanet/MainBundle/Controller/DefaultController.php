<?php

namespace Urbanet\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UrbanetMainBundle:Default:index.html.twig');
    }
    
    public function rechercheAction()
    {
        return $this->render('UrbanetMainBundle:Default:Recherche.html.twig');
    }
}
