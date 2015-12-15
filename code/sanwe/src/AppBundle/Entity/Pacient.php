<?php

namespace AppBundle\Entity;

/**
 * Pacient
 */
class Pacient
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
     * @var integer
     */
    private $typeAnimal;

    /**
     * @var integer
     */
    private $typeBreeding;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var boolean
     */
    private $isCastrated;

    /**
     * @var string
     */
    private $registration;

    /**
     * @var string
     */
    private $chipCode;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var integer
     */
    private $status;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Pacient
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     *
     * @return Pacient
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
     * Set typeAnimal
     *
     * @param integer $typeAnimal
     *
     * @return Pacient
     */
    public function setTypeAnimal($typeAnimal)
    {
        $this->typeAnimal = $typeAnimal;

        return $this;
    }

    /**
     * Get typeAnimal
     *
     * @return integer
     */
    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }

    /**
     * Set typeBreeding
     *
     * @param integer $typeBreeding
     *
     * @return Pacient
     */
    public function setTypeBreeding($typeBreeding)
    {
        $this->typeBreeding = $typeBreeding;

        return $this;
    }

    /**
     * Get typeBreeding
     *
     * @return integer
     */
    public function getTypeBreeding()
    {
        return $this->typeBreeding;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Pacient
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Pacient
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set isCastrated
     *
     * @param boolean $isCastrated
     *
     * @return Pacient
     */
    public function setIsCastrated($isCastrated)
    {
        $this->isCastrated = $isCastrated;

        return $this;
    }

    /**
     * Get isCastrated
     *
     * @return boolean
     */
    public function getIsCastrated()
    {
        return $this->isCastrated;
    }

    /**
     * Set registration
     *
     * @param string $registration
     *
     * @return Pacient
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;

        return $this;
    }

    /**
     * Get registration
     *
     * @return string
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set chipCode
     *
     * @param string $chipCode
     *
     * @return Pacient
     */
    public function setChipCode($chipCode)
    {
        $this->chipCode = $chipCode;

        return $this;
    }

    /**
     * Get chipCode
     *
     * @return string
     */
    public function getChipCode()
    {
        return $this->chipCode;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Pacient
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Pacient
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Pacient
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}

