<?php

namespace AppBundle\Entity;

/**
 * Appointment
 */
class Appointment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $appointmentDate;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var \DateTime
     */
    private $endTime;

    /**
     * @var string
     */
    private $backgroundData;

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
     * @var \AppBundle\Entity\Client
     */
    private $idClient;

    /**
     * @var \AppBundle\Entity\Client
     */
    private $dniClient;

    /**
     * @var \AppBundle\Entity\Clinic
     */
    private $idClinic;

    /**
     * @var \AppBundle\Entity\SystemUser
     */
    private $idUser;


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
     * @param integer $type
     *
     * @return Appointment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set appointmentDate
     *
     * @param \DateTime $appointmentDate
     *
     * @return Appointment
     */
    public function setAppointmentDate($appointmentDate)
    {
        $this->appointmentDate = $appointmentDate;

        return $this;
    }

    /**
     * Get appointmentDate
     *
     * @return \DateTime
     */
    public function getAppointmentDate()
    {
        return $this->appointmentDate;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Appointment
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Appointment
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set backgroundData
     *
     * @param string $backgroundData
     *
     * @return Appointment
     */
    public function setBackgroundData($backgroundData)
    {
        $this->backgroundData = $backgroundData;

        return $this;
    }

    /**
     * Get backgroundData
     *
     * @return string
     */
    public function getBackgroundData()
    {
        return $this->backgroundData;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Appointment
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
     * @return Appointment
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
     * @return Appointment
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

    /**
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     *
     * @return Appointment
     */
    public function setIdClient(\AppBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set dniClient
     *
     * @param \AppBundle\Entity\Client $dniClient
     *
     * @return Appointment
     */
    public function setDniClient(\AppBundle\Entity\Client $dniClient = null)
    {
        $this->dniClient = $dniClient;

        return $this;
    }

    /**
     * Get dniClient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getDniClient()
    {
        return $this->dniClient;
    }

    /**
     * Set idClinic
     *
     * @param \AppBundle\Entity\Clinic $idClinic
     *
     * @return Appointment
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

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\SystemUser $idUser
     *
     * @return Appointment
     */
    public function setIdUser(\AppBundle\Entity\SystemUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\SystemUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}

