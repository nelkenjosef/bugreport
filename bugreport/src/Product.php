<?php
// src/Product.php

/**
 * class for entity Product
 *
 * @version 1.0
 * @author  nelkenjosef <bugreport@nelkenjosef.de>
 * @since   class available since release 1.0.0
 */
class Product
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

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
