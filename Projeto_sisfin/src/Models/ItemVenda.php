<?php

namespace Sisfin\Models;

class ItemVenda {
    private $qtd;
    private $preco;
    private $desconto;

    public function __construct($qtd, $preco, $desconto) {
        $this->qtd = $qtd;
        $this->preco = $preco;
        $this->desconto = $preco;
    }
}