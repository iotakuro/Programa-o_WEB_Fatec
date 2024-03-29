<?php

require_once ('telefone.php');
require_once ('celular.php');
require_once ('fixo.php');
require_once ('prepago.php');
require_once ('pospago.php');

$fixo = new Fixo(11, 99999999, 0.10);
$prepago = new PrePago(11, 88888888, 0.20, "Operadora X");
$pospago = new PosPago(11, 77777777, 0.30, "Operadora Y");

$tempoLigacao = 60;

echo "Custo Fixo: R$" . $fixo->calculaCusto($tempoLigacao) . PHP_EOL ."<br>";
echo "Custo Pré-pago: R$" . $prepago->calculaCusto($tempoLigacao) . PHP_EOL ."<br>";
echo "Custo Pós-pago: R$" . $pospago->calculaCusto($tempoLigacao) . PHP_EOL ."<br>";

?>
