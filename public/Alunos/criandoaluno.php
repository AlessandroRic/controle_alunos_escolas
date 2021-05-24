<?php

use Estuda\Entities\Aluno;

require_once "../../bootstrap.php";

$aluno = new Aluno;

$aluno->setNome($_POST['nome']);
$aluno->setEmail($_POST['email']);
$aluno->setDataNascimento(new DateTime($_POST['data_nascimento']));
$aluno->setGenero($_POST['genero']);
$aluno->setTelefone($_POST['telefone']);

$entityManager->persist($aluno);

$entityManager->flush();

header("Location: /criar-aluno.php");

