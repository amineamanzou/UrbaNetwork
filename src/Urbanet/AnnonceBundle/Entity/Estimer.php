<?php

namespace Urbanet\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Estimer
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Urbanet\AnnonceBundle\Entity\EstimerRepository")
*/
class Estimer
{
    /**
* @ORM\Id
* @ORM\ManyToOne(targetEntity="Urbanet\AnnonceBundle\Entity\Annonce")
*/
    private $Annonce;

    /**
* @ORM\Id
* @ORM\ManyToOne(targetEntity="Urbanet\CvBundle\Entity\Competence")
*/
    private $Competence;


    /**
* @var integer
*
* @ORM\Column(name="Niveau", type="integer")
*/
    private $Niveau;


    /**
* Set Niveau
*
* @param integer $niveau
* @return Estimer
*/
    public function setNiveau($niveau)
    {
        $this->Niveau = $niveau;
    
        return $this;
    }

    /**
* Get Niveau
*
* @return integer
*/
    public function getNiveau()
    {
        return $this->Niveau;
    }

    /**
* Set Annonce
*
* @param \Urbanet\AnnonceBundle\Entity\Annonce $annonce
* @return Estimer
*/
    public function setAnnonce(\Urbanet\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->Annonce = $annonce;
    
        return $this;
    }

    /**
* Get Annonce
*
* @return \Urbanet\AnnonceBundle\Entity\Annonce
*/
    public function getAnnonce()
    {
        return $this->Annonce;
    }

    /**
* Set Competence
*
* @param \Urbanet\AnnonceBundle\Entity\Competence $competence
* @return Estimer
*/
    public function setCompetence(\Urbanet\AnnonceBundle\Entity\Competence $competence)
    {
        $this->Competence = $competence;
    
        return $this;
    }

    /**
* Get Competence
*
* @return \Urbanet\AnnonceBundle\Entity\Competence
*/
    public function getCompetence()
    {
        return $this->Competence;
    }
}