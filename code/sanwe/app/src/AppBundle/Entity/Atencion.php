<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atencion
 *
 * @ORM\Table(name="atencion", indexes={@ORM\Index(name="IDX_39854FC4961045CB", columns={"id_paciente"}), @ORM\Index(name="IDX_39854FC4B0E3F18F", columns={"nombre_paciente"}), @ORM\Index(name="IDX_39854FC42A813255", columns={"id_cliente"}), @ORM\Index(name="IDX_39854FC45112F25B", columns={"dni_cliente"}), @ORM\Index(name="IDX_39854FC4FA21E35E", columns={"id_clinica"}), @ORM\Index(name="IDX_39854FC4FCF8192D", columns={"id_usuario"})})
 * @ORM\Entity
 */
class Atencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="atencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=true)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_fin", type="time", nullable=true)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentes", type="string", nullable=true)
     */
    private $antecedentes;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \AppBundle\Entity\Paciente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id")
     * })
     */
    private $idPaciente;

    /**
     * @var \AppBundle\Entity\Paciente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nombre_paciente", referencedColumnName="nombre")
     * })
     */
    private $nombrePaciente;

    /**
     * @var \AppBundle\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * })
     */
    private $idCliente;

    /**
     * @var \AppBundle\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni_cliente", referencedColumnName="dni")
     * })
     */
    private $dniCliente;

    /**
     * @var \AppBundle\Entity\Clinica
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clinica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clinica", referencedColumnName="id")
     * })
     */
    private $idClinica;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;


}

