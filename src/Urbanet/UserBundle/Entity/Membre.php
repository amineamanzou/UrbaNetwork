<?php

namespace Urbanet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\UserBundle\Entity\MembreRepository")
 */
class Membre
{
    /**
     * @ORM\OneToOne(targetEntity="Urbanet\UserBundle\Entity\Artiste", cascade={"persist"})
    */
    private $Artiste;

    /**
     * @ORM\OneToOne(targetEntity="Urbanet\UserBundle\Entity\Annonceur", cascade={"persist"})
    */
    private $Annonceur;    

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
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $Type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Permission", type="boolean")
     */
    private $Permission;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $Adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255)
     */
    private $Ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="CP", type="integer")
     */
    private $CP;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=255)
     */
    private $Pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTel", type="integer")
     */
    private $NumTel;


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
     * Set Type
     *
     * @param string $type
     * @return Membre
     */
    public function setType($type)
    {
        $this->Type = $type;
    
        return $this;
    }

    /**
     * Get Type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Permission
     *
     * @param boolean $permission
     * @return Membre
     */
    public function setPermission($permission)
    {
        $this->Permission = $permission;
    
        return $this;
    }

    /**
     * Get Permission
     *
     * @return boolean 
     */
    public function getPermission()
    {
        return $this->Permission;
    }

    /**
     * Set Adresse
     *
     * @param string $adresse
     * @return Membre
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;
    
        return $this;
    }

    /**
     * Get Adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set Ville
     *
     * @param string $ville
     * @return Membre
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
     * Set CP
     *
     * @param integer $cP
     * @return Membre
     */
    public function setCP($cP)
    {
        $this->CP = $cP;
    
        return $this;
    }

    /**
     * Get CP
     *
     * @return integer 
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set Pays
     *
     * @param string $pays
     * @return Membre
     */
    public function setPays($pays)
    {
        $this->Pays = $pays;
    
        return $this;
    }

    /**
     * Get Pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * Set NumTel
     *
     * @param integer $numTel
     * @return Membre
     */
    public function setNumTel($numTel)
    {
        $this->NumTel = $numTel;
    
        return $this;
    }

    /**
     * Get NumTel
     *
     * @return integer 
     */
    public function getNumTel()
    {
        return $this->NumTel;
    }

    /**
     * Set Artiste
     *
     * @param \Urbanet\UserBundle\Entity\Artiste $artiste
     * @return Membre
     */
    public function setArtiste(\Urbanet\UserBundle\Entity\Artiste $artiste = null)
    {
        $this->Artiste = $artiste;
    
        return $this;
    }

    /**
     * Get Artiste
     *
     * @return \Urbanet\UserBundle\Entity\Artiste 
     */
    public function getArtiste()
    {
        return $this->Artiste;
    }

    /**
     * Set Annonceur
     *
     * @param \Urbanet\UserBundle\Entity\Annonceur $annonceur
     * @return Membre
     */
    public function setAnnonceur(\Urbanet\UserBundle\Entity\Annonceur $annonceur = null)
    {
        $this->Annonceur = $annonceur;
    
        return $this;
    }

    /**
     * Get Annonceur
     *
     * @return \Urbanet\UserBundle\Entity\Annonceur 
     */
    public function getAnnonceur()
    {
        return $this->Annonceur;
    }
}