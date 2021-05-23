<?php

namespace Estuda\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aluno")
 */
class Aluno {


    public function __construct()
    {
        $this->turmas = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type = "integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type = "string")
     */
    private $nome;

    /**
     * @ORM\Column(type = "string", nullable = true)
     */
    private $telefone = null;

    /**
     * @ORM\Column(type = "string")
     */
    private $email;

    /**
     * @ORM\Column(type = "datetime", nullable = true)
     */
    private $data_nascimento = null;

    /**
     * @ORM\Column(type = "string", nullable = true)
     */
    private $genero;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento(string $data_nascimento)
    {
        $this->data_nascimento = date('Y-m-d',strtotime($data_nascimento));
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero(string $genero)
    {
        $this->genero = $genero;
    }
}