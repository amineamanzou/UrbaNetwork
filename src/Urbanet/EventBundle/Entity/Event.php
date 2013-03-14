<?php

namespace Urbanet\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\EventBundle\Entity\EventRepository")
 */
class Event
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
     * @ORM\Column(name="Affiche", type="string", length=255)
     */
    private $Affiche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date")
     */
    private $DateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date")
     */
    private $DateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HeureFin", type="time")
     */
    private $HeureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu", type="string", length=255)
     */
    private $Lieu;


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
     * @return Event
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
     * Set Affiche
     *
     * @param string $affiche
     * @return Event
     */
    public function setAffiche($affiche)
    {
        $this->Affiche = $affiche;
    
        return $this;
    }

    /**
     * Get Affiche
     *
     * @return string 
     */
    public function getAffiche()
    {
        return $this->Affiche;
    }

    /**
     * Set DateDebut
     *
     * @param \DateTime $dateDebut
     * @return Event
     */
    public function setDateDebut($dateDebut)
    {
        $this->DateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get DateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * Set DateFin
     *
     * @param \DateTime $dateFin
     * @return Event
     */
    public function setDateFin($dateFin)
    {
        $this->DateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get DateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * Set HeureFin
     *
     * @param \DateTime $heureFin
     * @return Event
     */
    public function setHeureFin($heureFin)
    {
        $this->HeureFin = $heureFin;
    
        return $this;
    }

    /**
     * Get HeureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->HeureFin;
    }

    /**
     * Set Lieu
     *
     * @param string $lieu
     * @return Event
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
}