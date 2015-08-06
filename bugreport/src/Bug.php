<?php
// src/Bug.php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * class for entity Bug
 *
 * @Entity(repositoryClass="BugRepository")
 * @Table(name="bugs")
 *
 * @version 1.1
 * @author  nelkenjosef
 * @since   class available since release 1.1.0
 */
class Bug
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
     * @Column(name="description", type="string")
     *
     * @var   string
     * @since 1.0
     */
    protected $description;

    /**
     * @Column(name="created", type="datetime")
     *
     * @var   DateTime
     * @since 1.0
     */
    protected $created;

    /**
     * @Column(name="status", type="string", length=16)
     *
     * @var   string
     * @since 1.0
     */
    protected $status;

    /**
     * @var   Doctrine\Common\Collections\ArrayCollection of Product
     * @since 1.1
     */
    protected $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
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
     * Getter for $description
     *
     * @return string
     * @since  1.0
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for $description
     *
     * @param  string $description
     * @return void
     * @since  1.0
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Getter for $created
     *
     * @return DateTime
     * @since  1.0
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Setter for $created
     *
     * @param  DateTime $created
     * @return void
     * @since  1.0
     */
    public function setCreated(DateTime $created)
    {
        $this->created = $created;
    }

    /**
     * Getter for $status
     *
     * @return string
     * @since  1.0
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for $status
     *
     * @param  string $status
     * @return void
     * @since  1.0
     */
    public function setSatus($status)
    {
        $this->status = $status;
    }
}
