<?php

namespace Urbanet\CvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Urbanet\CvBundle\Entity\CVArt;
use Urbanet\CvBundle\Form\CVArtType;

class DefaultController extends Controller
{
    public function voirAction($id)
    {
        if(!$id)
            return $this->redirect($this->generateUrl("urbanet_cv_ajouter"));
            
        $em = $this->getDoctrine()->getEntityManager();
        $CVArt = $em->getRepository("UrbanetCvBundle:CVArt")->findOneById($id);
    return $this->render('UrbanetCvBundle:Default:voir.html.twig', array(
    'CVArt' => $CVArt,
    ));
   
    }

    public function ajouterAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $CVArt = new CVArt();
        $form = $this->createForm(new CVArtType(), $CVArt);
        $request = $this->getRequest();
        
        if($request->isMethod('POST'))
        {
            $form->bindRequest($request);
            
            if ($form->isValid()){

                $CVArt = $form->getData();
                $em->persist($CVArt);
                $em->flush();
            
                return $this->redirect($this->generateUrl("urbanet_cv_voir", array(
                            'id' => $CVArt->getId(),	
                            )));
            }
            
        }
        
        
        return $this->render('UrbanetCvBundle:Default:ajouter.html.twig', array(
            'id' => $CVArt->getId(),
            'form' => $form->createView(),
        ));
    }

    public function editerAction(CVArt $CVArt)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new CVArtType(), $CVArt);
        $request = $this->getRequest();
        
        if($request->isMethod('POST'))
        {
            $form->bindRequest($request);
            
            if ($form->isValid()){

                $CVArt = $form->getData();
                $em->persist($CVArt);
                $em->flush();
            
                return $this->redirect(
                 $this->generateUrl("urbanet_cv_voir", array(
                            'id' => $CVArt->getId(),
                            )));
            }
        }
            
        return $this->render('UrbanetCvBundle:Default:editer.html.twig', array(
            'id' => $CVArt->getId(),
            'form' => $form->createView(),
        ));
    }
}