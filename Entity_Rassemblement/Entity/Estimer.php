<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estimer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\EstimerRepository")
 */
class Estimer
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Annonce")
     */
    private $Annonce;

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
     * @param \Training\ArticleBundle\Entity\Annonce $annonce
     * @return Estimer
     */
    public function setAnnonce(\Training\ArticleBundle\Entity\Annonce $annonce)
    {
        $this->Annonce = $annonce;
    
        return $this;
    }

    /**
     * Get Annonce
     *
     * @return \Training\ArticleBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->Annonce;
    }

    /**
     * Set Competence
     *
     * @param \Training\ArticleBundle\Entity\Competence $competence
     * @return Estimer
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