<?php

namespace AppBundle\Entity;

/**
 * Material
 */
class Material
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
     * @var string
     */
    private $description;

    /**
     * @var \AppBundle\Entity\CostMaterial
     */
    private $idCostMaterial;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idMedicRecord;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMedicRecord = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Material
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
     * Set description
     *
     * @param string $description
     *
     * @return Material
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idCostMaterial
     *
     * @param \AppBundle\Entity\CostMaterial $idCostMaterial
     *
     * @return Material
     */
    public function setIdCostMaterial(\AppBundle\Entity\CostMaterial $idCostMaterial = null)
    {
        $this->idCostMaterial = $idCostMaterial;

        return $this;
    }

    /**
     * Get idCostMaterial
     *
     * @return \AppBundle\Entity\CostMaterial
     */
    public function getIdCostMaterial()
    {
        return $this->idCostMaterial;
    }

    /**
     * Add idMedicRecord
     *
     * @param \AppBundle\Entity\MedicRecord $idMedicRecord
     *
     * @return Material
     */
    public function addIdMedicRecord(\AppBundle\Entity\MedicRecord $idMedicRecord)
    {
        $this->idMedicRecord[] = $idMedicRecord;

        return $this;
    }

    /**
     * Remove idMedicRecord
     *
     * @param \AppBundle\Entity\MedicRecord $idMedicRecord
     */
    public function removeIdMedicRecord(\AppBundle\Entity\MedicRecord $idMedicRecord)
    {
        $this->idMedicRecord->removeElement($idMedicRecord);
    }

    /**
     * Get idMedicRecord
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdMedicRecord()
    {
        return $this->idMedicRecord;
    }
}

