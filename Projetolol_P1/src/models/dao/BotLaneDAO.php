<?php

namespace Php\Projetolol\Models\DAO;

use Php\Projetolol\Models\Domain\BotLane;

class BotLaneDAO{
    private Conect $conect;

    public function __construct(){
        $this->conect = new Conect();
    }
    
    public function insert(BotLane $botLane){
        try{
            $sql = "INSERT INTO botlane  (nomeCamp, item, counterCamp, idJg) VALUES(:nomeCamp, :item, :counterCamp, :idJg)";
            $query = $this->conect->getConect()->prepare($sql);
            $query->bindValue(":nomeCamp", $botLane->getNomeCamp());
            $query->bindValue(":item", $botLane->getItem());
            $query->bindValue(":counterCamp", $botLane->getCounterCamp());
            $query->bindValue(":idJg", $botLane->getIdJg());
            return $query->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function consultarJg(){
        try{
            $sql = "SELECT botlane.*, jungle.idJg FROM botlane INNER JOIN jungle ON botlane.idJg = jungle.idJg";
            return $this->conect->getConect()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }
}