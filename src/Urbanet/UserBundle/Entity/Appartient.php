<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\AppartientRepository")
 */
class Appartient
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Artiste")
     */
    private $Artiste;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Crew")
     */
    private $Crew;


    /**
     * @var string
     *
     * @ORM\Column(name="Fonction", type="string", length=255)
     */
    private $Fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="Droit", type="string", length=255)
     */
    private $Droit;




    /**
     * Set Fonction
     *
     * @param string $fonction
     * @return Appartient
     */
    public function setFonction($fonction)
    {
        $this->Fonction = $fonction;
    
        return $this;
    }

    /**
     * Get Fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->Fonction;
    }

    /**
     * Set Droit
     *
     * @param string $droit
     * @return Appartient
     */
    public function setDroit($droit)
    {
        $this->Droit = $droit;
    
        return $this;
    }

    /**
     * Get Droit
     *
     * @return string 
     */
    public function getDroit()
    {
        return $this->Droit;
    }

    /**
     * Set Artiste
     *
     * @param \Training\ArticleBundle\Entity\Artiste $artiste
     * @return Appartient
     */
    public function setArtiste(\Training\ArticleBundle\Entity\Artiste $artiste)
    {
        $this->Artiste = $artiste;
    
        return $this;
    }

    /**
     * Get Artiste
     *
     * @return \Training\ArticleBundle\Entity\Artiste 
     */
    public function getArtiste()
    {
        return $this->Artiste;
    }

    /**
     * Set Crew
     *
     * @param \Training\ArticleBundle\Entity\Crew $crew
     * @return Appartient
     */
    public function setCrew(\Training\ArticleBundle\Entity\Crew $crew)
    {
        $this->Crew = $crew;
    
        return $this;
    }

    /**
     * Get Crew
     *
     * @return \Training\ArticleBundle\Entity\Crew 
     */
    public function getCrew()
    {
        return $this->Crew;
    }
}