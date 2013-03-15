<?php

namespace Urbanet\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spectacle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\CvBundle\Entity\SpectacleRepository")
 */
class Spectacle
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
     * @var integer
     *
     * @ORM\Column(name="Nbr", type="integer", nullable=true)
     */
    private $Nbr;


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
     * @return Spectacle
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
     * @return Spectacle
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
     * @return Spectacle
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
     * @return Spectacle
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
     * Set Nbr
     *
     * @param integer $nbr
     * @return Spectacle
     */
    public function setNbr($nbr)
    {
        $this->Nbr = $nbr;
    
        return $this;
    }

    /**
     * Get Nbr
     *
     * @return integer 
     */
    public function getNbr()
    {
        return $this->Nbr;
    }
}