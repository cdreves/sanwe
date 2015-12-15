<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente", uniqueConstraints={@ORM\UniqueConstraint(name="paciente_nombre_key", columns={"nombre"}), @ORM\UniqueConstraint(name="paciente_id_key", columns={"id"})})
 * @ORM\Entity
 */
class Paciente
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
     * @ORM\Column(name="nombre", type="string", length=150)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_animal", type="integer", nullable=true)
     */
    private $tipoAnimal;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_raza", type="integer", nullable=true)
     */
    private $tipoRaza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=15, nullable=true)
     */
    private $sexo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_castrado", type="boolean", nullable=true)
     */
    private $isCastrado;

    /**
     * @var string
     *
     * @ORM\Column(name="inscripcion", type="string", length=100, nullable=true)
     */
    private $inscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_chip", type="string", length=100, nullable=true)
     */
    private $codigoChip;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text", nullable=true)
     */
    private $comentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=200, nullable=true)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;


}

