<?php

namespace Estuda\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="turma")
 */
class Turma {

    /**
     * @ORM\Id
     * @ORM\Column(type = "integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type = "datetime", nullable = true)
     */
    private $ano;

    const NIVEL_FUNDAMENTAL = 'fundamental';
    const NIVEL_MEDIO = 'medio';
    /**
     * @ORM\Column(type = "string", columnDefinition="ENUM('fundamental', 'medio')", nullable = true)
     */
    private $nivel;

    /**
     * @ORM\Column(type = "string", nullable = true)
     */
    private $serie;

    /**
     * @ORM\Column(type = "string", nullable = true)
     */
    private $turno;

    public function getId()
    {
        return $this->id;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno(string $ano)
    {
        $this->ano = $ano;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel(string $nivel)
    {
        if (!in_array($nivel, array(self::NIVEL_FUNDAMENTAL, self::NIVEL_MEDIO))) {
            throw new \InvalidArgumentException("Invalid status");
        }
        $this->nivel = $nivel;
    }

    public function getSerie()
    {
        return $this->serie;
    }

    public function setSerie(string $serie)
    {
        $this->serie = $serie;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function setTurno(string $turno)
    {
        $this->turno = $turno;
    }
}