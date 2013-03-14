<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CVArt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\CVArtRepository")
 */
class CVArt
{
    /**
     * @ORM\ManyToMany(targetEntity="Training\ArticleBundle\Entity\Spectacle", cascade={"persist"})
     */
    private $Spectacle;

    /**
     * @ORM\ManyToMany(targetEntity="Training\ArticleBundle\Entity\Formation", cascade={"persist"})
     */
    private $Formation;

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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $Titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=255)
     */
    private $Logo;


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
     * Set Titre
     *
     * @param string $titre
     * @return CVArt
     */
    public function setTitre($titre)
    {
        $this->Titre = $titre;
    
        return $this;
    }

    /**
     * Get Titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set Logo
     *
     * @param string $logo
     * @return CVArt
     */
    public function setLogo($logo)
    {
        $this->Logo = $logo;
    
        return $this;
    }

    /**
     * Get Logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Spectacle = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Formation = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Spectacle
     *
     * @param \Training\ArticleBundle\Entity\Spectacle $spectacle
     * @return CVArt
     */
    public function addSpectacle(\Training\ArticleBundle\Entity\Spectacle $spectacle)
    {
        $this->Spectacle[] = $spectacle;
    
        return $this;
    }

    /**
     * Remove Spectacle
     *
     * @param \Training\ArticleBundle\Entity\Spectacle $spectacle
     */
    public function removeSpectacle(\Training\ArticleBundle\Entity\Spectacle $spectacle)
    {
        $this->Spectacle->removeElement($spectacle);
    }

    /**
     * Get Spectacle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpectacle()
    {
        return $this->Spectacle;
    }

    /**
     * Add Formation
     *
     * @param \Training\ArticleBundle\Entity\Formation $formation
     * @return CVArt
     */
    public function addFormation(\Training\ArticleBundle\Entity\Formation $formation)
    {
        $this->Formation[] = $formation;
    
        return $this;
    }

    /**
     * Remove Formation
     *
     * @param \Training\ArticleBundle\Entity\Formation $formation
     */
    public function removeFormation(\Training\ArticleBundle\Entity\Formation $formation)
    {
        $this->Formation->removeElement($formation);
    }

    /**
     * Get Formation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormation()
    {
        return $this->Formation;
    }
}