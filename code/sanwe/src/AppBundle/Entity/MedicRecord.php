<?php

namespace AppBundle\Entity;

/**
 * MedicRecord
 */
class MedicRecord
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $inicio;

    /**
     * @var \DateTime
     */
    private $fin;

    /**
     * @var string
     */
    private $records;

    /**
     * @var string
     */
    private $diagnosis;

    /**
     * @var string
     */
    private $treatment;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var \DateTime
     */
    private $nextControl;

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
     * @var \AppBundle\Entity\Appointment
     */
    private $idAppointment;

    /**
     * @var \AppBundle\Entity\SystemUser
     */
    private $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idMaterial;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMaterial = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return MedicRecord
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
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return MedicRecord
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return MedicRecord
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set records
     *
     * @param string $records
     *
     * @return MedicRecord
     */
    public function setRecords($records)
    {
        $this->records = $records;

        return $this;
    }

    /**
     * Get records
     *
     * @return string
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * Set diagnosis
     *
     * @param string $diagnosis
     *
     * @return MedicRecord
     */
    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;

        return $this;
    }

    /**
     * Get diagnosis
     *
     * @return string
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Set treatment
     *
     * @param string $treatment
     *
     * @return MedicRecord
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;

        return $this;
    }

    /**
     * Get treatment
     *
     * @return string
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return MedicRecord
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
     * Set nextControl
     *
     * @param \DateTime $nextControl
     *
     * @return MedicRecord
     */
    public function setNextControl($nextControl)
    {
        $this->nextControl = $nextControl;

        return $this;
    }

    /**
     * Get nextControl
     *
     * @return \DateTime
     */
    public function getNextControl()
    {
        return $this->nextControl;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return MedicRecord
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
     * @return MedicRecord
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
     * @return MedicRecord
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
     * Set idAppointment
     *
     * @param \AppBundle\Entity\Appointment $idAppointment
     *
     * @return MedicRecord
     */
    public function setIdAppointment(\AppBundle\Entity\Appointment $idAppointment = null)
    {
        $this->idAppointment = $idAppointment;

        return $this;
    }

    /**
     * Get idAppointment
     *
     * @return \AppBundle\Entity\Appointment
     */
    public function getIdAppointment()
    {
        return $this->idAppointment;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\SystemUser $idUser
     *
     * @return MedicRecord
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

    /**
     * Add idMaterial
     *
     * @param \AppBundle\Entity\Material $idMaterial
     *
     * @return MedicRecord
     */
    public function addIdMaterial(\AppBundle\Entity\Material $idMaterial)
    {
        $this->idMaterial[] = $idMaterial;

        return $this;
    }

    /**
     * Remove idMaterial
     *
     * @param \AppBundle\Entity\Material $idMaterial
     */
    public function removeIdMaterial(\AppBundle\Entity\Material $idMaterial)
    {
        $this->idMaterial->removeElement($idMaterial);
    }

    /**
     * Get idMaterial
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdMaterial()
    {
        return $this->idMaterial;
    }
}

