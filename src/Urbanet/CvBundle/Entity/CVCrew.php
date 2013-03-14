<?php

namespace Urbanet\CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* CVCrew
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Urbanet\CvBundle\Entity\CVCrewRepository")
*/
class CVCrew
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
* Get id
*
* @return integer
*/
    public function getId()
    {
        return $this->id;
    }
}