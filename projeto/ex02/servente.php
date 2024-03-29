<?php
class Servente extends Funcionario {
  private $adicionalInsalubridade;

  public function __construct($codigo, $nome, $salarioBase) {
    parent::__construct($codigo, $nome, $salarioBase);
    $this->adicionalInsalubridade = $salarioBase * 0.05;
  }

  public function getAdicionalInsalubridade() {
    return $this->adicionalInsalubridade;
  }

  public function getSalarioLiquido() {
    $salarioLiquido = parent::getSalarioLiquido();
    return $salarioLiquido + $this->adicionalInsalubridade;
  }

  public function __toString() {
    $str = parent::__toString();
    return $str . "\n Adicional Insalubridade: " . $this->getAdicionalInsalubridade();
  }
}
?>
