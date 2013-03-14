<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discipline
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\DisciplineRepository")
 */
class Discipline
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
     * @ORM\Column(name="Libelle", type="string", length=255)
     */
    private $Libelle;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Libelle
     *
     * @param string $libelle
     * @return Discipline
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
     * Set DateDebut
     *
     * @param \DateTime $dateDebut
     * @return Discipline
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
     * @return Discipline
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
}