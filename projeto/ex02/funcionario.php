<?php

class Funcionario {
  private $nome;
  private $codigo;
  private $salarioBase;

  public function __construct($codigo, $nome, $salarioBase) {
  
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->salarioBase = $salarioBase;
  }

 
  public function getNome() {
    return $this->nome;
  }

  public function getCodigo() {
    return $this->codigo;
  }

  public function getSalarioBase() {
    return $this->salarioBase;
  }

  public function setSalarioBase($salarioBase) {
    $this->salarioBase = $salarioBase;
  }


  public function getSalarioLiquido() {
    $inss = $this->salarioBase * 0.1;
    $ir = 0.0;
    if ($this->salarioBase > 2000.0) {
      $ir = ($this->salarioBase - 2000.0) * 0.12;
    }
    return $this->salarioBase - $inss - $ir;
  }


  public function toString() {
    return  "<br>". (get_class($this) . "\n Codigo:  ". $this->getCodigo().  "<br>"
            . "\n Nome: " . $this->getNome() . "\n Salario Base: " . $this->getSalarioBase().  "<br>"
            . "\n Salario Liquido: " . $this->getSalarioLiquido()).  "<br>";
  }
}

?>
