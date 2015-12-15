<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material", indexes={@ORM\Index(name="IDX_7CBE7595BC56688B", columns={"id_costo_material"})})
 * @ORM\Entity
 */
class Material
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="material_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var \AppBundle\Entity\CostoMaterial
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CostoMaterial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_costo_material", referencedColumnName="id")
     * })
     */
    private $idCostoMaterial;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\FichaMedica", mappedBy="idMaterial")
     */
    private $idFichaMedica;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFichaMedica = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

