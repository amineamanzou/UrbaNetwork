<?php

namespace Urbanet\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UrbanetAnnonceBundle:Default:index.html.twig');
    }
    
    public function nosannonceursAction()
    {
        return $this->render('UrbanetAnnonceBundle:Default:NosAnnonceurs.html.twig');
    }    
}
