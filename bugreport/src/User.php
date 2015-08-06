<?php
// src/User.php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * class for entity User
 *
 * @Entity
 * @Table(name="users")
 *
 * @version 1.1
 * @author  nelkenjosef
 * @since   class available since release 1.1.1
 */
class User
{
    /**
     * @Column(name="id", type="integer")
     * @GeneratedValue
     * @Id
     *
     * @var   int
     * @since 1.0
     */
    protected $id;

    /**
     * @Column(name="name", type="string", length=64)
     *
     * @var   string
     * @since 1.0
     */
    protected $name;

    /**
     * @var   Doctrine\Common\Collections\ArrayCollection of Bug
     * @since 1.1
     */
    protected $reportedBugs;

    /**
     * @var   Doctrine\Common\Collections\ArrayCollection of Bug
     * @since 1.1
     */
    protected $assignedBugs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    /**
     * Getter for $id
     *
     * @return int
     * @since  1.0
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Getter for $name
     *
     * @return string
     * @since  1.0
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for $name
     *
     * @param  string $name
     * @return void
     * @since  1.0
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
