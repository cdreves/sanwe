<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="cliente_id_key", columns={"id"}), @ORM\UniqueConstraint(name="cliente_dni_key", columns={"dni"})}, indexes={@ORM\Index(name="IDX_F41C9B25961045CB", columns={"id_paciente"}), @ORM\Index(name="IDX_F41C9B25B0E3F18F", columns={"nombre_paciente"})})
 * @ORM\Entity
 */
class Cliente
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
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cliente", type="string", length=60, nullable=true)
     */
    private $nombreCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido1", type="string", length=50, nullable=true)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=20, nullable=true)
     */
    private $apellido2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="sexo", type="integer", nullable=true)
     */
    private $sexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nacionalidad", type="integer", nullable=true)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=150, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=100, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="comuna", type="string", length=100, nullable=true)
     */
    private $comuna;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

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


}

