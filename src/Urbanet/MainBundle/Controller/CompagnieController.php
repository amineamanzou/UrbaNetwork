<?php

namespace Urbanet\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompagnieController extends Controller
{    
    public function aproposAction()
    {
        return $this->render('UrbanetMainBundle:Compagnie:APropos.html.twig');
    }
    
    public function suggestionAction()
    {
        return $this->render('UrbanetMainBundle:Compagnie:Suggestion.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('UrbanetMainBundle:Compagnie:Contact.html.twig');
    }
}
