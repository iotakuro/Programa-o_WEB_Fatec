<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\ToplaneDAO;
use Php\Projetolol\Models\Domain\TopLane;

class TopLaneController{
    public function insert($params){
        require_once("../src/views/toplane/insert_toplane.php");
    }

    public function new($params){
        $toplane = new TopLane(0,$_POST['nome'],$_POST['items'],$_POST['counters'],$_POST['id_jungle']);
        $toplaneDAO = new ToplaneDAO();
        if($toplaneDAO->insert($toplane)){
            return "! ! ! Sucesso ! ! ! ";
        }
        else{
            return "Falha na inserção";
        }

    }
}




