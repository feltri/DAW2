<?php

namespace Sisfin\Models;

class Fornecedor {
    private $id;
    private $tipoFornecedor;
    private $cpf_cnpj;
    private $razaoSocial;
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

    public function __construct($id, $tipoFornecedor, $cpf_cnpj, $razaoSocial, $nome, $rua, $num, $bairro, $cidade, $complemento, $cep, $telefone, $email, $celular) {
        $this->id = $id;
        $this->tipoFornecedor = $tipoFornecedor;
        $this->cpf_cnpj = $cpf_cnpj;
        $this->razaoSocial = $razaoSocial;
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
    }
}