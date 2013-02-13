<?php

namespace Urbanet\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UrbanetCvBundle:Default:index.html.twig', array('name' => $name));
    }
}
