<?php

namespace Urbanet\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryPub
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\AnnonceBundle\Entity\CategoryPubRepository")
 */
class CategoryPub
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
     * @return CategoryPub
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
}