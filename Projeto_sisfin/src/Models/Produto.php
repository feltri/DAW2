<?php

namespace Sisfin\Models;

class Produto {
    private $id;
    private $nome;
    private $preco;

    public function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }
}