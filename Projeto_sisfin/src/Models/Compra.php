<?php

namespace Sisfin\Models;

class Compra {
    private $id;
    private $instante;
    private $descricao;
    private $desconto;
    private $total;

    public function __construct($id, $instante, $descricao, $desconto, $total) {
        $this->id = $id;
        $this->instante = $instante;
        $this->descricao = $descricao;
        $this->desconto = $desconto;
        $this->total = $total;
    }
}