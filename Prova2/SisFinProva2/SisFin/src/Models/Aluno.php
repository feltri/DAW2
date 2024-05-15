<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

 class Aluno
{
    private string $ra;
    private string $nome;
    private string $turma;

     public function __construct(string $ra, string $nome, string $turma)
    {
        $this->ra = $ra;
        $this->nome=$nome;
        $this->turma = $turma;
        return $this;
    }

     public function getRa(): string
     {
         return $this->ra;
     }

     public function setRa(string $ra): void
     {
         $this->ra = $ra;
     }

     public function getNome(): string
     {
         return $this->nome;
     }

     public function setNome(string $nome): void
     {
         $this->nome = $nome;
     }

     public function getTurma(): string
     {
         return $this->turma;
     }

     public function setTurma(string $turma): void
     {
         $this->turma = $turma;
     }

}