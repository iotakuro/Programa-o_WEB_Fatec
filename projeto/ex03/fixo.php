<?php

require_once 'telefone.php';

class Fixo extends Telefone {

    private $custoMinuto;

    public function __construct($ddd, $numero, $custoMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoMinuto = $custoMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoMinuto;
    }

    public function getCustoMinuto() {
        return $this->custoMinuto;
    }

}

?>
