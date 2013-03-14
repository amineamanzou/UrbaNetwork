<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\ClassementRepository")
 */
class Classement
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\CVArt")
     */
    private $CVArt;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Competition")
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
     * @param \Training\ArticleBundle\Entity\CVArt $cVArt
     * @return Classement
     */
    public function setCVArt(\Training\ArticleBundle\Entity\CVArt $cVArt)
    {
        $this->CVArt = $cVArt;
    
        return $this;
    }

    /**
     * Get CVArt
     *
     * @return \Training\ArticleBundle\Entity\CVArt 
     */
    public function getCVArt()
    {
        return $this->CVArt;
    }

    /**
     * Set Competition
     *
     * @param \Training\ArticleBundle\Entity\Competition $competition
     * @return Classement
     */
    public function setCompetition(\Training\ArticleBundle\Entity\Competition $competition)
    {
        $this->Competition = $competition;
    
        return $this;
    }

    /**
     * Get Competition
     *
     * @return \Training\ArticleBundle\Entity\Competition 
     */
    public function getCompetition()
    {
        return $this->Competition;
    }
}