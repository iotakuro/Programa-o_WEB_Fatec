<?php

    require_once("classePonto.php");


    $ponto1 = new Ponto(10, 20);
    $ponto2 = new Ponto(7, 32);

 
    echo "Ponto 1: " . $ponto1->toString() . "<br>";
    echo "Ponto 2: " . $ponto2->toString() . "<br>";

    echo "<br>";


    echo "Distância entre os pontos (método de instância): " . $ponto1->distancia($ponto2) . "<br>";


    echo "Distância entre os pontos (método de classe): " . Ponto::distanciaXY(1, 2, 4, 5) . "<br>";

    echo "<br>";

    
    echo "Número de pontos criados: " . Ponto::getNumeroPontos() . "<br>";
?>
