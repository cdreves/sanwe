<?php

namespace AppBundle\Entity;

/**
 * Client
 */
class Client
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $nameClient;

    /**
     * @var string
     */
    private $lastName1;

    /**
     * @var string
     */
    private $lastName2;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var integer
     */
    private $sex;

    /**
     * @var integer
     */
    private $nationality;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $municipality;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $dateCreacion;

    /**
     * @var string
     */
    private $passwd;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Pacient
     */
    private $idPacient;

    /**
     * @var \AppBundle\Entity\Pacient
     */
    private $namePacient;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Client
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
     * Set dni
     *
     * @param string $dni
     *
     * @return Client
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nameClient
     *
     * @param string $nameClient
     *
     * @return Client
     */
    public function setNameClient($nameClient)
    {
        $this->nameClient = $nameClient;

        return $this;
    }

    /**
     * Get nameClient
     *
     * @return string
     */
    public function getNameClient()
    {
        return $this->nameClient;
    }

    /**
     * Set lastName1
     *
     * @param string $lastName1
     *
     * @return Client
     */
    public function setLastName1($lastName1)
    {
        $this->lastName1 = $lastName1;

        return $this;
    }

    /**
     * Get lastName1
     *
     * @return string
     */
    public function getLastName1()
    {
        return $this->lastName1;
    }

    /**
     * Set lastName2
     *
     * @param string $lastName2
     *
     * @return Client
     */
    public function setLastName2($lastName2)
    {
        $this->lastName2 = $lastName2;

        return $this;
    }

    /**
     * Get lastName2
     *
     * @return string
     */
    public function getLastName2()
    {
        return $this->lastName2;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Client
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
     * @param integer $sex
     *
     * @return Client
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set nationality
     *
     * @param integer $nationality
     *
     * @return Client
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return integer
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Client
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set municipality
     *
     * @param string $municipality
     *
     * @return Client
     */
    public function setMunicipality($municipality)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return string
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateCreacion
     *
     * @param \DateTime $dateCreacion
     *
     * @return Client
     */
    public function setDateCreacion($dateCreacion)
    {
        $this->dateCreacion = $dateCreacion;

        return $this;
    }

    /**
     * Get dateCreacion
     *
     * @return \DateTime
     */
    public function getDateCreacion()
    {
        return $this->dateCreacion;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     *
     * @return Client
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Client
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

    /**
     * Set idPacient
     *
     * @param \AppBundle\Entity\Pacient $idPacient
     *
     * @return Client
     */
    public function setIdPacient(\AppBundle\Entity\Pacient $idPacient = null)
    {
        $this->idPacient = $idPacient;

        return $this;
    }

    /**
     * Get idPacient
     *
     * @return \AppBundle\Entity\Pacient
     */
    public function getIdPacient()
    {
        return $this->idPacient;
    }

    /**
     * Set namePacient
     *
     * @param \AppBundle\Entity\Pacient $namePacient
     *
     * @return Client
     */
    public function setNamePacient(\AppBundle\Entity\Pacient $namePacient = null)
    {
        $this->namePacient = $namePacient;

        return $this;
    }

    /**
     * Get namePacient
     *
     * @return \AppBundle\Entity\Pacient
     */
    public function getNamePacient()
    {
        return $this->namePacient;
    }
}

