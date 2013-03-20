<?php

namespace Urbanet\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\MainBundle\Entity\ContactRepository")
 */
class Contact
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
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $Email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Objet", type="string", length=255)
     */
    private $Objet;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text")
     */
    private $Message;
    
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
     * @return Contact
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
     * @return Contact
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
     * Set Email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->Email = $email;
    
        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }
    
    /**
     * Set Objet
     *
     * @param string $objet
     * @return Contact
     */
    public function setObjet($objet)
    {
        $this->Objet = $objet;
    
        return $this;
    }

    /**
     * Get Objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->Objet;
    }
    
    /**
     * Set Message
     *
     * @param string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->Message = $message;
    
        return $this;
    }

    /**
     * Get Message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->Message;
    }
}