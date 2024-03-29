<?php

require_once 'telefone.php';

abstract class Celular extends Telefone {

    protected $custoMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }

    public abstract function calculaCusto($tempo);

    public function getCustoMinutoBase() {
        return $this->custoMinutoBase;
    }

    public function getOperadora() {
        return $this->operadora;
    }

}

?>
