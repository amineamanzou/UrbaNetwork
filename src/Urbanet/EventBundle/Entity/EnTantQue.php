<?php

namespace Urbanet\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnTantQue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\EventBundle\Entity\EnTantQueRepository")
 */
class EnTantQue
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Urbanet\UserBundle\Entity\Membre")
     */
    private $Membre;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Urbanet\EventBundle\Entity\Event")
     */
    private $Event;



    public function setStatut($statut)
    {
        $this->Statut = $statut;
    
        return $this;
    }

    /**
     * Get Statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->Statut;
    }

    /**
     * Set Membre
     *
     * @param \Urbanet\EventBundle\Entity\Membre $membre
     * @return EnTantQue
     */
    public function setMembre(\Urbanet\EventBundle\Entity\Membre $membre)
    {
        $this->Membre = $membre;
    
        return $this;
    }

    /**
     * Get Membre
     *
     * @return \Urbanet\EventBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->Membre;
    }

    /**
     * Set Event
     *
     * @param \Urbanet\EventBundle\Entity\Event $event
     * @return EnTantQue
     */
    public function setEvent(\Urbanet\EventBundle\Entity\Event $event)
    {
        $this->Event = $event;
    
        return $this;
    }

    /**
     * Get Event
     *
     * @return \Urbanet\EventBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->Event;
    }
}