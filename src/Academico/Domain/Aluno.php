<?php

namespace Desafio\Academico\Domain;

use Exception;

class Aluno
{
    private $nome;
    private $idade;
    private $cpf;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        if($this->validaNome($nome)){
            $this->nome = $nome; 
            return;
        }
        throw new Exception('Nome Inválido');
        
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        if ($this->validaIdade($idade)) {
            $this->idade = $idade;
            return;
        }
        throw new Exception('Idade Inválida');
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        if ($this->validaCpf($cpf)) {
            $this->cpf = $cpf;
            return;
        }
        throw new Exception('CPF Inválido');
    }

    private function validaNome(string $nome) : bool
    {
        return strlen($nome) >= 5;
    }

    private function validaIdade(int $idade) : bool
    {
        return $idade > 18;
    }

    private function validaCpf(string $cpf) : bool
    {
        return strlen($cpf) == 11;
    }
}
