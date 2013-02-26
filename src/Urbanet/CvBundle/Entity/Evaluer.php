<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\EvaluerRepository")
 */
class Evaluer
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\CVArt")
     */
    private $CVArt;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Competence")
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
     * @return Evaluer
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
     * Set CVArt
     *
     * @param \Training\ArticleBundle\Entity\CVArt $cVArt
     * @return Evaluer
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
     * Set Competence
     *
     * @param \Training\ArticleBundle\Entity\Competence $competence
     * @return Evaluer
     */
    public function setCompetence(\Training\ArticleBundle\Entity\Competence $competence)
    {
        $this->Competence = $competence;
    
        return $this;
    }

    /**
     * Get Competence
     *
     * @return \Training\ArticleBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->Competence;
    }
}