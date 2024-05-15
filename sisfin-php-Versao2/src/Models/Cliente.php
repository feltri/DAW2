<?php

namespace Sisfin\Models;

use Sisfin\Util\TipoPessoa;

 class Cliente
{
    private int $_id;
    private TipoPessoa $_tipoPessoa;
    private string $_nome;
    private string $_email;
    private string $_cpf_cnpj;
    private Date $_dataNascimento;
    private string $_rua;
    private int $_numero;
    private string $_bairro;
    private string $_cidade;
    private string $_complemento;
    private string $_cep;
    private string $_telefone;
    private string $_celular;
    private float $_limite;

    /**
     * @param int $_id
     * @param string $_nome
     * @param string $_email
     */
    public function __construct(int $_id, string $_nome, string $_email, TipoPessoa $_tipoPessoa, string $_cpf_cnpj, Date $_dataNascimento, string $_rua, int $_numero, string $_bairro, string $_cidade, string $_complemento, string $_cep, string $_telefone, string $_celular, float $_limite)
    {
        $this->_id = $_id;
        $this->_nome = $_nome;
        $this->_email = $_email;
        $this->_tipoPessoa=$_tipoPessoa;
        $this->_cpf_cnpj = $_cpf_cnpj;
        $this->_dataNascimento = $_dataNascimento;
        $this->_rua = $_rua;
        $this->_numero=$_numero;
        $this->_bairro = $_bairro;
        $this->_cidade = $_cidade;
        $this->_complemento = $_complemento;
        $this->_cep=$_cep;
        $this->_telefone = $_telefone;
        $this->_celular = $_celular;
        $this->_limite = $_limite;
    }


    public function getTipoPessoa(): TipoPessoa
    {
        return $this->_tipoPessoa;
    }

    public function setTipoPessoa(TipoPessoa $tipoPessoa): Cliente
    {
        $this->_tipoPessoa = $tipoPessoa;
        return $this;
    }
    public function getId(): int
    {
        return $this->_id;
    }

    public function setId(int $id): Cliente
    {
        $this->_id = $id;
        return $this;
    }

    public function getNome(): string
    {
        return $this->_nome;
    }

    public function setNome(string $nome): Cliente
    {
        $this->_nome = $nome;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->_email;
    }

    public function setEmail(string $email): Cliente
    {
        $this->_email = $email;
        return $this;
    }

    public function getCpf_Cnpj(): string
    {
        return $this->_cpf_cnpj;
    }

    public function setCpf_Cnpj(string $cpf_cnpj): Cliente
    {
        $this->_cpf_cnpj = $cpf_cnpj;
        return $this;
    }
    public function getDataNascimento(): Date
    {
        return $this->_dataNascimento;
    }

    public function setDataNascimento(Date $dataNascimento): Cliente
    {
        $this->_dataNascimento = $dataNascimento;
        return $this;
    }

    public function getRua(): string
    {
        return $this->_rua;
    }

    public function setRua(string $rua): Cliente
    {
        $this->_rua = $rua;
        return $this;
    }

    public function getNumero(): int
    {
        return $this->_numero;
    }

    public function setNumero(string $numero): Cliente
    {
        $this->_numero = $numero;
        return $this;
    }
    public function getBairro(): string
    {
        return $this->_bairro;
    }

    public function setBairro(string $bairro): Cliente
    {
        $this->_bairro = $bairro;
        return $this;
    }
    public function getCidade(): string
    {
        return $this->_cidade;
    }

    public function setCidade(string $cidade): Cliente
    {
        $this->_cidade = $cidade;
        return $this;
    }

    public function getComplemento(): string
    {
        return $this->_complemento;
    }

    public function setComplemento(string $complemento): Cliente
    {
        $this->_complemento = $complemento;
        return $this;
    }

    public function getCep(): string
    {
        return $this->_cep;
    }

    public function setCep(string $cep): Cliente
    {
        $this->_cep = $cep;
        return $this;
    }

    public function getTelefone(): string
    {
        return $this->_telefone;
    }

    public function setTelefone(string $telefone): Cliente
    {
        $this->_telefone = $telefone;
        return $this;
    }

    public function getCelular(): string
    {
        return $this->_celular;
    }

    public function setCelular(string $celular): Cliente
    {
        $this->_celular = $celular;
        return $this;
    }
    public function getLimite(): float
    {
        return $this->_limite;
    }

    public function setLimite(float $limite): Cliente
    {
        $this->_limite = $limite;
        return $this;
    }
    public static function getAll(): array{
        $lstClientes = [];

        $lstClientes[]=new Cliente(1,'João das Dores', 'jodor@example.com',TipoPessoa::PESSOA_FISICA);
        $lstClientes[]=new Cliente(2,'Maria Atanazia', 'mata@example.com',TipoPessoa::PESSOA_JURIDICA);
        $lstClientes[]=new Cliente(3,'Carlota Richio', 'carris@example.com',TipoPessoa::PESSOA_FISICA);
        return $lstClientes;
    }
}