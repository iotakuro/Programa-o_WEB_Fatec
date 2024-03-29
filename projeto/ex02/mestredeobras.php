<?php

class MestreDeObras extends Servente {

  private $numFuncionariosSupervisionados;

  public function __construct($codigo, $nome, $salarioBase, $numFuncionariosSupervisionados) {
    parent::__construct($codigo, $nome, $salarioBase);
    $this->numFuncionariosSupervisionados = $numFuncionariosSupervisionados;
  }

  public function getNumFuncionariosSupervisionados() {
    return $this->numFuncionariosSupervisionados;
  }

  public function setNumFuncionariosSupervisionados($numFuncionariosSupervisionados) {
    $this->numFuncionariosSupervisionados = $numFuncionariosSupervisionados;
  }

  public function getAdicionalInsalubridade() {
    $adicional = parent::getAdicionalInsalubridade();
    return $adicional + ($adicional * ($this->numFuncionariosSupervisionados / 10));
  }

  public function __toString() {
    $str = parent::__toString();
    return $str . "\n Num. Funcionários Supervisionados: " . $this->getNumFuncionariosSupervisionados();
  }
}

?>
