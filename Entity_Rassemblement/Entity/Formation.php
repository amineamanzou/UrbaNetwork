<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $Type;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=255)
     */
    private $Libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $Date;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu", type="string", length=255)
     */
    private $Lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="Duree", type="string", length=255)
     */
    private $Duree;

    /**
     * @var string
     *
     * @ORM\Column(name="Intervenant", type="string", length=255)
     */
    private $Intervenant;


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
     * @return Formation
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
     * Set Libelle
     *
     * @param string $libelle
     * @return Formation
     */
    public function setLibelle($libelle)
    {
        $this->Libelle = $libelle;
    
        return $this;
    }

    /**
     * Get Libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * Set Date
     *
     * @param \DateTime $date
     * @return Formation
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
     * Set Lieu
     *
     * @param string $lieu
     * @return Formation
     */
    public function setLieu($lieu)
    {
        $this->Lieu = $lieu;
    
        return $this;
    }

    /**
     * Get Lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->Lieu;
    }

    /**
     * Set Duree
     *
     * @param string $duree
     * @return Formation
     */
    public function setDuree($duree)
    {
        $this->Duree = $duree;
    
        return $this;
    }

    /**
     * Get Duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->Duree;
    }

    /**
     * Set Intervenant
     *
     * @param string $intervenant
     * @return Formation
     */
    public function setIntervenant($intervenant)
    {
        $this->Intervenant = $intervenant;
    
        return $this;
    }

    /**
     * Get Intervenant
     *
     * @return string 
     */
    public function getIntervenant()
    {
        return $this->Intervenant;
    }
}