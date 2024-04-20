<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\MidlaneDAO;
use Php\Projetolol\Models\Domain\MidLane;

class MidLaneController{
    public function insert($params){
        require_once("../src/views/midlane/insert_midlane.php");
    }

    public function new($params){
        $midlane = new MidLane(0,$_POST['nome'],$_POST['items'],$_POST['counters'],$_POST['id_jungle']);
        $midlaneDAO = new MidlaneDAO();
        if($midlaneDAO->insert($midlane)){
            return "! ! ! Sucesso ! ! ! ";
        }
        else{
            return "Falha na inserção";
        }

    }
}




