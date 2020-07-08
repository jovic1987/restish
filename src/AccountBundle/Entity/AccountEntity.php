<?php

namespace AccountBundle\Entity;

/**
 * AccountEntity
 */
class AccountEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $owner;


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
     * Set owner
     *
     * @param string $owner
     *
     * @return AccountEntity
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}

