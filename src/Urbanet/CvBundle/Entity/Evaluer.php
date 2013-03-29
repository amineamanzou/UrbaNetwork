<?php

namespace Urbanet\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\CvBundle\Entity\EvaluerRepository")
 */
class Evaluer
{
    /**
     * @ORM\ManyToOne(targetEntity="Urbanet\CvBundle\Entity\CVArt")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CVArt;

    /**
     * @ORM\ManyToOne(targetEntity="Urbanet\CvBundle\Entity\Competence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Competence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Niveau", type="integer")
     */
    private $Niveau;


    /**
     * Set Niveau
     *
     * @param integer $niveau
     * @return Evaluer
     */
    public function setNiveau($niveau)
    {
        $this->Niveau = $niveau;
    
        return $this;
    }

    /**
     * Get Niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->Niveau;
    }

    /**
     * Set CVArt
     *
     * @param \Urbanet\CvBundle\Entity\CVArt $cVArt
     * @return Evaluer
     */
    public function setCVArt(\Urbanet\CvBundle\Entity\CVArt $cVArt)
    {
        $this->CVArt = $cVArt;
    
        return $this;
    }

    /**
     * Get CVArt
     *
     * @return \Urbanet\CvBundle\Entity\CVArt 
     */
    public function getCVArt()
    {
        return $this->CVArt;
    }

    /**
     * Set Competence
     *
     * @param \Urbanet\CvBundle\Entity\Competence $competence
     * @return Evaluer
     */
    public function setCompetence(\Urbanet\CvBundle\Entity\Competence $competence)
    {
        $this->Competence = $competence;
    
        return $this;
    }

    /**
     * Get Competence
     *
     * @return \Urbanet\CvBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->Competence;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}