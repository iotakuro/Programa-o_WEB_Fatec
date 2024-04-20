<?php

namespace Php\Projetolol\Models\DAO;

use Php\Projetolol\Models\Domain\TopLane;

class ToplaneDAO{
    private Conect $conect;

    public function __construct(){
        $this->conect = new Conect();
    }
    
    public function insert(TopLane $topLane){
        try{
            $sql = "INSERT INTO toplane  (nomeCamp, item, counterCamp, idJg) VALUES(:nomeCamp, :item, :counterCamp, :idJg)";
            $query = $this->conect->getConect()->prepare($sql);
            $query->bindValue(":nomeCamp", $topLane->getNomeCamp());
            $query->bindValue(":item", $topLane->getItem());
            $query->bindValue(":counterCamp", $topLane->getCounterCamp());
            $query->bindValue(":idJg", $topLane->getIdJg());
            return $query->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function consultarJg(){
        try{
            $sql = "SELECT toplane.*, jungle.idJg FROM toplane INNER JOIN jungle ON toplane.idJg = jungle.idJg";
            return $this->conect->getConect()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }
}