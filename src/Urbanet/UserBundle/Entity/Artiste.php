<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\ArtisteRepository")
 */
class Artiste
{
    /**
     * @ORM\ManyToMany(targetEntity="Training\ArticleBundle\Entity\Discipline", cascade={"persist"})
     */
    private $Discipline;

    /**
     * @ORM\OneToOne(targetEntity="Training\ArticleBundle\Entity\CVArt", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $CVArt;

    /**
     * @ORM\OneToOne(targetEntity="Training\ArticleBundle\Entity\Mediatheque", cascade={"persist"})
     */
    private $Mediatheque;

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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $Nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $Prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date")
     */
    private $DateNaissance;


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
     * Set Nom
     *
     * @param string $nom
     * @return Artiste
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
    
        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set Prenom
     *
     * @param string $prenom
     * @return Artiste
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;
    
        return $this;
    }

    /**
     * Get Prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set DateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Artiste
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->DateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get DateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * Set CVArt
     *
     * @param \Training\ArticleBundle\Entity\CVArt $cVArt
     * @return Artiste
     */
    public function setCVArt(\Training\ArticleBundle\Entity\CVArt $cVArt = null)
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
     * Set Mediatheque
     *
     * @param \Training\ArticleBundle\Entity\Mediatheque $mediatheque
     * @return Artiste
     */
    public function setMediatheque(\Training\ArticleBundle\Entity\Mediatheque $mediatheque = null)
    {
        $this->Mediatheque = $mediatheque;
    
        return $this;
    }

    /**
     * Get Mediatheque
     *
     * @return \Training\ArticleBundle\Entity\Mediatheque 
     */
    public function getMediatheque()
    {
        return $this->Mediatheque;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Discipline = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Discipline
     *
     * @param \Training\ArticleBundle\Entity\Discipline $discipline
     * @return Artiste
     */
    public function addDiscipline(\Training\ArticleBundle\Entity\Discipline $discipline)
    {
        $this->Discipline[] = $discipline;
    
        return $this;
    }

    /**
     * Remove Discipline
     *
     * @param \Training\ArticleBundle\Entity\Discipline $discipline
     */
    public function removeDiscipline(\Training\ArticleBundle\Entity\Discipline $discipline)
    {
        $this->Discipline->removeElement($discipline);
    }

    /**
     * Get Discipline
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDiscipline()
    {
        return $this->Discipline;
    }
}