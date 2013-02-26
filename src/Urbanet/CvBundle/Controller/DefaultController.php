<?php

namespace Urbanet\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UrbanetCvBundle:Default:index.html.twig');
    }
    
    public function cvAction()
    {
        return $this->render('UrbanetCvBundle:Default:cv.html.twig');
    }
}
