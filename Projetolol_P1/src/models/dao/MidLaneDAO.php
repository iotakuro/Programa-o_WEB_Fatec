<?php

namespace Php\Projetolol\Models\DAO;

use Php\Projetolol\Models\Domain\MidLane;

class MidLaneDAO{
    private Conect $conect;

    public function __construct(){
        $this->conect = new Conect();
    }
    
    public function insert(MidLane $midLane){
        try{
            $sql = "INSERT INTO midlane  (nomeCamp, item, counterCamp, idJg) VALUES(:nomeCamp, :item, :counterCamp, :idJg)";
            $query = $this->conect->getConect()->prepare($sql);
            $query->bindValue(":nomeCamp", $midLane->getNomeCamp());
            $query->bindValue(":item", $midLane->getItem());
            $query->bindValue(":counterCamp", $midLane->getCounterCamp());
            $query->bindValue(":idJg", $midLane->getIdJg());
            return $query->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function consultarJg(){
        try{
            $sql = "SELECT midlane.*, jungle.idJg FROM midlane INNER JOIN jungle ON midlane.idJg = jungle.idJg";
            return $this->conect->getConect()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }
}