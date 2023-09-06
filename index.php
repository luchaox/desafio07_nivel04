<?php

require_once "vendor/autoload.php";
use Desafio\Academico\Domain\Aluno;

$aluno = new Aluno();

$aluno->setNome('Lucas Miguel');
$aluno->setIdade(22);
$aluno->setCpf('12345678900');