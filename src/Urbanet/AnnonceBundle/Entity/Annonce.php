<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\AnnonceRepository")
 */
class Annonce
{
    /**
     * @ORM\ManyToMany(targetEntity="Training\ArticleBundle\Entity\Tag", cascade={"persist"})
     */
    private $Tag;

    /**
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\CategoryPub")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CategoryPub;

    /**
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Membre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Membre;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $Date;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255)
     */
    private $Ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255)
     */
    private $Contenu;


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
     * @return Annonce
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
     * Set Date
     *
     * @param \DateTime $date
     * @return Annonce
     */
    public function setDate($date)
    {
        $this->Date = $date;
    
        return $this;
    }

    /**
     * Get Date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set Ville
     *
     * @param string $ville
     * @return Annonce
     */
    public function setVille($ville)
    {
        $this->Ville = $ville;
    
        return $this;
    }

    /**
     * Get Ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * Set Contenu
     *
     * @param string $contenu
     * @return Annonce
     */
    public function setContenu($contenu)
    {
        $this->Contenu = $contenu;
    
        return $this;
    }

    /**
     * Get Contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * Set CategoryPub
     *
     * @param \Training\ArticleBundle\Entity\CategoryPub $categoryPub
     * @return Annonce
     */
    public function setCategoryPub(\Training\ArticleBundle\Entity\CategoryPub $categoryPub)
    {
        $this->CategoryPub = $categoryPub;
    
        return $this;
    }

    /**
     * Get CategoryPub
     *
     * @return \Training\ArticleBundle\Entity\CategoryPub 
     */
    public function getCategoryPub()
    {
        return $this->CategoryPub;
    }

    /**
     * Set Membre
     *
     * @param \Training\ArticleBundle\Entity\Membre $membre
     * @return Annonce
     */
    public function setMembre(\Training\ArticleBundle\Entity\Membre $membre)
    {
        $this->Membre = $membre;
    
        return $this;
    }

    /**
     * Get Membre
     *
     * @return \Training\ArticleBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->Membre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Tag = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Tag
     *
     * @param \Training\ArticleBundle\Entity\Tag $tag
     * @return Annonce
     */
    public function addTag(\Training\ArticleBundle\Entity\Tag $tag)
    {
        $this->Tag[] = $tag;
    
        return $this;
    }

    /**
     * Remove Tag
     *
     * @param \Training\ArticleBundle\Entity\Tag $tag
     */
    public function removeTag(\Training\ArticleBundle\Entity\Tag $tag)
    {
        $this->Tag->removeElement($tag);
    }

    /**
     * Get Tag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTag()
    {
        return $this->Tag;
    }
}