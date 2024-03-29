<?php
    require_once("funcionario.php");
    require_once("servente.php");
    require_once("motorista.php");
    require_once("mestredeobras.php");

    $funcionario = new Funcionario(1, "Carlos Alfredo", 1500.0);
    $servente = new Servente(2, "João Antônio", 2000.0);
    $motorista = new Motorista(3, "Maria Luiza", 2500.0, "123456789");
    $mestreDeObras = new MestreDeObras(4, "Luis Flipe", 3000.0, 15);
    
    echo $funcionario->toString();
    echo $servente->toString();
    echo $motorista->toString();
    echo $mestreDeObras->toString();
    