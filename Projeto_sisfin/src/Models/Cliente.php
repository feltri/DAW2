<?php

namespace Sisfin\Models;

Class Cliente{
    private $id;
    private $tipoCliente;
    private $cpf_cnpj;
    private $razaoSocial;
    private $nascimento;
    private $nome;
    private $rua;
    private $num;
    private $bairro;
    private $cidade;
    private $complemento;
    private $cep;
    private $telefone;
    private $email;
    private $celular;
    private $limite;

    public function __construct($id, $tipoCliente, $cpf_cnpj, $razaoSocial, $nascimento, $nome, $rua, $num, $bairro, $cidade, $complemento, $cep, $telefone, $email, $celular, $limite) {
        $this->id = $id;
        $this->tipoCliente = $tipoCliente;
        $this->cpf_cnpj = $cpf_cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->nascimento = $nascimento;
        $this->nome = $nome;
        $this->rua = $rua;
        $this->num = $num;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->complemento = $complemento;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->celular = $celular;
        $this->limite = $limite;
    }
}