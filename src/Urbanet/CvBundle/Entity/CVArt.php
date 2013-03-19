<?php

namespace Urbanet\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CVArt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\CvBundle\Entity\CVArtRepository")
 */
class CVArt
{
    /**
     * @ORM\ManyToMany(targetEntity="Urbanet\CvBundle\Entity\Spectacle", cascade={"persist"}, inversedBy="CVArt")
     */
    private $Spectacle;

    /**
     * @ORM\ManyToMany(targetEntity="Urbanet\CvBundle\Entity\Formation", cascade={"persist"})
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
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $Photo;


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
     * @param \Urbanet\CvBundle\Entity\Spectacle $spectacle
     * @return CVArt
     */
    public function addSpectacle(\Urbanet\CvBundle\Entity\Spectacle $spectacle)
    {
        $this->Spectacle[] = $spectacle;
    
        return $this;
    }

    /**
     * Remove Spectacle
     *
     * @param \Urbanet\CvBundle\Entity\Spectacle $spectacle
     */
    public function removeSpectacle(\Urbanet\CvBundle\Entity\Spectacle $spectacle)
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
     * @param \Urbanet\CvBundle\Entity\Formation $formation
     * @return CVArt
     */
    public function addFormation(\Urbanet\CvBundle\Entity\Formation $formation)
    {
        $this->Formation[] = $formation;
    
        return $this;
    }

    /**
     * Remove Formation
     *
     * @param \Urbanet\CvBundle\Entity\Formation $formation
     */
    public function removeFormation(\Urbanet\CvBundle\Entity\Formation $formation)
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

    /**
     * Set Photo
     *
     * @param string $photo
     * @return CVArt
     */
    public function setPhoto($photo)
    {
        $this->Photo = $photo;
    
        return $this;
    }

    /**
     * Get Photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->Photo;
    }
}