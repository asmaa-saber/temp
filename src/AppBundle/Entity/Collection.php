<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collection
 */
class Collection
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $onDiscount;


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
     * Set name
     *
     * @param string $name
     * @return Collection
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set onDiscount
     *
     * @param boolean $onDiscount
     * @return Collection
     */
    public function setOnDiscount($onDiscount)
    {
        $this->onDiscount = $onDiscount;

        return $this;
    }

    /**
     * Get onDiscount
     *
     * @return boolean 
     */
    public function isOnDiscount()
    {
        return $this->onDiscount;
    }

}
