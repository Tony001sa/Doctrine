<?php

namespace App\Entities;

/**
 * Address
 */
class Address
{
    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $home;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $people;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->people = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set street.
     *
     * @param string $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set home.
     *
     * @param string $home
     *
     * @return Address
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home.
     *
     * @return string
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add person.
     *
     * @param \App\Entities\People $person
     *
     * @return Address
     */
    public function addPerson(\App\Entities\People $person)
    {
        $this->people[] = $person;

        return $this;
    }

    /**
     * Remove person.
     *
     * @param \App\Entities\People $person
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePerson(\App\Entities\People $person)
    {
        return $this->people->removeElement($person);
    }

    /**
     * Get people.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeople()
    {
        return $this->people;
    }
}
