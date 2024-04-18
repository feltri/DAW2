<?php

namespace Sisfin\Models;

class ItemCompra {
    private $qtd;
    private $preco;

    public function __construct($qtd, $preco) {
        $this->qtd = $qtd;
        $this->preco = $preco;
    }
}