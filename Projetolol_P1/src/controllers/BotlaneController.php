<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\BotlaneDAO;
use Php\Projetolol\Models\Domain\BotLane;

class BotLaneController{
    public function insert($params){
        require_once("../src/views/botlane/insert_botlane.php");
    }

    public function new($params){
        $botlane = new BotLane(0,$_POST['nome'],$_POST['items'],$_POST['counters'],$_POST['id_jungle']);
        $botlaneDAO = new BotlaneDAO();
        if($botlaneDAO->insert($botlane)){
            return "! ! ! Sucesso ! ! ! ";
        }
        else{
            return "Falha na inserção";
        }

    }
}




