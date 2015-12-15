<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichaMedica
 *
 * @ORM\Table(name="ficha_medica", uniqueConstraints={@ORM\UniqueConstraint(name="ficha_medica_id_key", columns={"id"}), @ORM\UniqueConstraint(name="ficha_medica_id_paciente_key", columns={"id_paciente"}), @ORM\UniqueConstraint(name="ficha_medica_nombre_paciente_key", columns={"nombre_paciente"})}, indexes={@ORM\Index(name="IDX_E10B1F66695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_E10B1F66FCF8192D", columns={"id_usuario"})})
 * @ORM\Entity
 */
class FichaMedica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="datetime", nullable=true)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime", nullable=true)
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentes", type="text", nullable=true)
     */
    private $antecedentes;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="text", nullable=true)
     */
    private $diagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="tratamiento", type="text", nullable=true)
     */
    private $tratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", nullable=true)
     */
    private $foto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proximo_control", type="date", nullable=true)
     */
    private $proximoControl;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \AppBundle\Entity\Paciente
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id", unique=true)
     * })
     */
    private $idPaciente;

    /**
     * @var \AppBundle\Entity\Paciente
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nombre_paciente", referencedColumnName="nombre", unique=true)
     * })
     */
    private $nombrePaciente;

    /**
     * @var \AppBundle\Entity\Atencion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Atencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Material", inversedBy="idFichaMedica")
     * @ORM\JoinTable(name="consumo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_ficha_medica", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_material", referencedColumnName="id")
     *   }
     * )
     */
    private $idMaterial;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMaterial = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

