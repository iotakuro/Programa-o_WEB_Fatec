<?php

abstract class Telefone {

    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public abstract function calculaCusto($tempo);

    public function getDdd() {
        return $this->ddd;
    }

    public function getNumero() {
        return $this->numero;
    }

}

?>
