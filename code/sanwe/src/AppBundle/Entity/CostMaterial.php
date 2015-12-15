<?php

namespace AppBundle\Entity;

/**
 * CostMaterial
 */
class CostMaterial
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var \DateTime
     */
    private $dateInicio;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var integer
     */
    private $moneda;


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
     * Set cost
     *
     * @param integer $cost
     *
     * @return CostMaterial
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set dateInicio
     *
     * @param \DateTime $dateInicio
     *
     * @return CostMaterial
     */
    public function setDateInicio($dateInicio)
    {
        $this->dateInicio = $dateInicio;

        return $this;
    }

    /**
     * Get dateInicio
     *
     * @return \DateTime
     */
    public function getDateInicio()
    {
        return $this->dateInicio;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return CostMaterial
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set moneda
     *
     * @param integer $moneda
     *
     * @return CostMaterial
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return integer
     */
    public function getMoneda()
    {
        return $this->moneda;
    }
}

