<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\JungleDAO;
use Php\Projetolol\Models\Domain\Jungle;

class JungleController{
    public function insert($params){
        require_once("../src/views/jungle/insert_jungle.php");
    }

    public function new($params){
        $jungle = new Jungle(0,$_POST['nome'],$_POST['items'],$_POST['counters']);
        $jungleDAO = new JungleDAO();
        if($jungleDAO->insert($jungle)){
            return "! ! ! Sucesso ! ! ! ";
        }
        else{
            return "Falha na inserção";
        }

    }
}




