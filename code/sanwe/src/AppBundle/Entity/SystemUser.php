<?php

namespace AppBundle\Entity;

/**
 * SystemUser
 */
class SystemUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $name;

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
     * @var \AppBundle\Entity\Clinic
     */
    private $idClinic;


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
     * Set type
     *
     * @param string $type
     *
     * @return SystemUser
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return SystemUser
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
     * Set name
     *
     * @param string $name
     *
     * @return SystemUser
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
     * Set lastName1
     *
     * @param string $lastName1
     *
     * @return SystemUser
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
     * @return SystemUser
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
     * @return SystemUser
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
     * @return SystemUser
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
     * @return SystemUser
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
     * @return SystemUser
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
     * Set email
     *
     * @param string $email
     *
     * @return SystemUser
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
     * @return SystemUser
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
     * @return SystemUser
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
     * @return SystemUser
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
     * Set idClinic
     *
     * @param \AppBundle\Entity\Clinic $idClinic
     *
     * @return SystemUser
     */
    public function setIdClinic(\AppBundle\Entity\Clinic $idClinic = null)
    {
        $this->idClinic = $idClinic;

        return $this;
    }

    /**
     * Get idClinic
     *
     * @return \AppBundle\Entity\Clinic
     */
    public function getIdClinic()
    {
        return $this->idClinic;
    }
}

