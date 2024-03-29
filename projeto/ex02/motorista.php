<?php

class Motorista extends Funcionario {

  private $carteiraMotorista;

  public function __construct($codigo, $nome, $salarioBase, $carteiraMotorista) {
    parent::__construct($codigo, $nome, $salarioBase);
    $this->carteiraMotorista = $carteiraMotorista;
  }

  public function getCarteiraMotorista() {
    return $this->carteiraMotorista;
  }

  public function setCarteiraMotorista($carteiraMotorista) {
    $this->carteiraMotorista = $carteiraMotorista;
  }

  public function __toString() {
    $str = parent::__toString();
    return $str . "\n Carteira Motorista: " . $this->getCarteiraMotorista();
  }
}

?>
