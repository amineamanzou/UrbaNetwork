<?php

namespace Urbanet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Annonceur
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Urbanet\UserBundle\Entity\AnnonceurRepository")
*/
class Annonceur
{
    /**
* @var integer
*
* @ORM\Column(name="id", type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
    private $id;

    /**
* @var string
*
* @ORM\Column(name="RaisonSocial", type="string", length=255)
*/
    private $RaisonSocial;

    /**
* @var string
*
* @ORM\Column(name="Adresse", type="string", length=255)
*/
    private $Adresse;


    /**
* Get id
*
* @return integer
*/
    public function getId()
    {
        return $this->id;
    }

    /**
* Set RaisonSocial
*
* @param string $raisonSocial
* @return Annonceur
*/
    public function setRaisonSocial($raisonSocial)
    {
        $this->RaisonSocial = $raisonSocial;
    
        return $this;
    }

    /**
* Get RaisonSocial
*
* @return string
*/
    public function getRaisonSocial()
    {
        return $this->RaisonSocial;
    }

    /**
* Set Adresse
*
* @param string $adresse
* @return Annonceur
*/
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;
    
        return $this;
    }

    /**
* Get Adresse
*
* @return string
*/
    public function getAdresse()
    {
        return $this->Adresse;
    }
}