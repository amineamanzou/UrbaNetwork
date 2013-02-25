<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\VideoRepository")
 */
class Video
{
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
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $Description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="date")
     */
    private $DateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="NomUser", type="string", length=255)
     */
    private $NomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="string", length=255)
     */
    private $Url;


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
     * @return Video
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
     * Set Description
     *
     * @param string $description
     * @return Video
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set DateCreation
     *
     * @param \DateTime $dateCreation
     * @return Video
     */
    public function setDateCreation($dateCreation)
    {
        $this->DateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get DateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->DateCreation;
    }

    /**
     * Set NomUser
     *
     * @param string $nomUser
     * @return Video
     */
    public function setNomUser($nomUser)
    {
        $this->NomUser = $nomUser;
    
        return $this;
    }

    /**
     * Get NomUser
     *
     * @return string 
     */
    public function getNomUser()
    {
        return $this->NomUser;
    }

    /**
     * Set Url
     *
     * @param string $url
     * @return Video
     */
    public function setUrl($url)
    {
        $this->Url = $url;
    
        return $this;
    }

    /**
     * Get Url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->Url;
    }
}