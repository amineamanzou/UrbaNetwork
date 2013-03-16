<?php

namespace Urbanet\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\CvBundle\Entity\ClassementRepository")
 */
class Classement
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Urbanet\CvBundle\Entity\CVArt")
     */
    private $CVArt;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Urbanet\CvBundle\Entity\Competition")
     */
    private $Competition;


    /**
     * @var string
     *
     * @ORM\Column(name="Classement", type="string", length=255)
     */
    private $Classement;


    /**
     * Set Classement
     *
     * @param string $classement
     * @return Classement
     */
    public function setClassement($classement)
    {
        $this->Classement = $classement;
    
        return $this;
    }

    /**
     * Get Classement
     *
     * @return string 
     */
    public function getClassement()
    {
        return $this->Classement;
    }

    /**
     * Set CVArt
     *
     * @param \Urbanet\CvBundle\Entity\CVArt $cVArt
     * @return Classement
     */
    public function setCVArt(\Urbanet\CvBundle\Entity\CVArt $cVArt)
    {
        $this->CVArt = $cVArt;
    
        return $this;
    }

    /**
     * Get CVArt
     *
     * @return \Urbanet\CvBundle\Entity\CVArt 
     */
    public function getCVArt()
    {
        return $this->CVArt;
    }

    /**
     * Set Competition
     *
     * @param \Urbanet\CvBundle\Entity\Competition $competition
     * @return Classement
     */
    public function setCompetition(\Urbanet\CvBundle\Entity\Competition $competition)
    {
        $this->Competition = $competition;
    
        return $this;
    }

    /**
     * Get Competition
     *
     * @return \Urbanet\CvBundle\Entity\Competition 
     */
    public function getCompetition()
    {
        return $this->Competition;
    }
}