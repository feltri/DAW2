<?php

namespace Sisfin\Models;

class Conta {
    private $id;
    private $descricao;
    private $tipo;
    private $status;

    public function __construct($id, $descricao, $tipo, $status) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->tipo = $tipo;
        $this->status = $status;
    }
}