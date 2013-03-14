<?php

namespace Training\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnTantQue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Training\ArticleBundle\Entity\EnTantQueRepository")
 */
class EnTantQue
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Membre")
     */
    private $Membre;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Training\ArticleBundle\Entity\Event")
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
     * @param \Training\ArticleBundle\Entity\Membre $membre
     * @return EnTantQue
     */
    public function setMembre(\Training\ArticleBundle\Entity\Membre $membre)
    {
        $this->Membre = $membre;
    
        return $this;
    }

    /**
     * Get Membre
     *
     * @return \Training\ArticleBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->Membre;
    }

    /**
     * Set Event
     *
     * @param \Training\ArticleBundle\Entity\Event $event
     * @return EnTantQue
     */
    public function setEvent(\Training\ArticleBundle\Entity\Event $event)
    {
        $this->Event = $event;
    
        return $this;
    }

    /**
     * Get Event
     *
     * @return \Training\ArticleBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->Event;
    }
}