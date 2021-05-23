<?php

namespace Estuda\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="escola")
 */
class Escola {

    /**
     * @ORM\Id
     * @ORM\Column(type = "integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type = "string", nullable = true)
     */
    private $nome;

    const SITUACAO_ATIVO = 'ativo';
    const SITUACAO_INATIVO = 'inativo';
    /**
     * @ORM\Column(type = "string", columnDefinition="ENUM('ativo', 'inativo')", nullable = false)
     */
    private $situacao;

    /**
     * @ORM\Column(type = "string", nullable = true)
     */
    private $endereco;

    /**
     * @ORM\Column(type = "datetime")
     */
    private $data;

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

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function setSituacao($situacao)
    {
        if (!in_array($situacao, array(self::SITUACAO_ATIVO, self::SITUACAO_INATIVO))) {
            throw new \InvalidArgumentException("situacao invalida!");
        }
        $this->situacao = $situacao;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(string $data)
    {
        $this->data = date('Y-m-d',strtotime($data));
    }
}