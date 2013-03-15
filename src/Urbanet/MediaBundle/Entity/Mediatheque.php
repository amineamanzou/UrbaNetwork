<?php

namespace Urbanet\MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediatheque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Urbanet\MediaBundle\Entity\MediathequeRepository")
 */
class Mediatheque
{
    /**
     * @ORM\ManyToMany(targetEntity="Urbanet\MediaBundle\Entity\Video", cascade={"persist"})
     */
    private $Video;

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
     * @ORM\Column(name="Logo", type="string", length=255)
     */
    private $Logo;


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
     * Set Logo
     *
     * @param string $logo
     * @return Mediatheque
     */
    public function setLogo($logo)
    {
        $this->Logo = $logo;
    
        return $this;
    }

    /**
     * Get Logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Video = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Video
     *
     * @param \Urbanet\MediaBundle\Entity\Video $video
     * @return Mediatheque
     */
    public function addVideo(\Urbanet\MediaBundle\Entity\Video $video)
    {
        $this->Video[] = $video;
    
        return $this;
    }

    /**
     * Remove Video
     *
     * @param \Urbanet\MediaBundle\Entity\Video $video
     */
    public function removeVideo(\Urbanet\MediaBundle\Entity\Video $video)
    {
        $this->Video->removeElement($video);
    }

    /**
     * Get Video
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideo()
    {
        return $this->Video;
    }
}