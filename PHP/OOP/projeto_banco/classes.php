<?php
class cliente{
    private $id;
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

    public function setCliente($id, $cpf_cnpj, $razaoSocial, $nascimento, $nome, $rua, $num, $bairro, $cidade, $complemento, $cep, $telefone, $email, $celular, $limite){
        $this->id = $id;
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

    public function getId(){
        return $this->id;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    public function getNascimento(){
        return $this->nascimento;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNum(){
        return $this->num;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getComplemeto(){
        return $this->complemento;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function getLimite(){
        return $this->limite;
    }
}

class fornecedor{
    private $id;
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

    
    public function setCliente($id, $cpf_cnpj, $razaoSocial, $nome, $rua, $num, $bairro, $cidade, $complemento, $cep, $telefone, $email, $celular){
        $this->id = $id;
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

    public function getId(){
        return $this->id;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNum(){
        return $this->num;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getComplemeto(){
        return $this->complemento;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCelular(){
        return $this->celular;
    }
}

class formaPagamento{
    private $id;
    private $nome;
    private $taxa;
    private $ativo;

    public function setFormaPagamento($id, $nome, $taxa, $ativo){
        $this->id = $id;
        $this->nome = $nome;
        $this->taxa = $taxa;
        $this->ativo = $ativo;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTaxa(){
        return $this->taxa;
    }
    public function getAtivo(){
        return $this->ativo;
    }
}

class tipoConta{

}

