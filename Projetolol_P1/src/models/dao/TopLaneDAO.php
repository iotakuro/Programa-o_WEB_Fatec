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

    public function consulta(){
        try{
            $sql = "SELECT * FROM toplane";
            return $this->conect->getConect()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultaid($idTop){
        try{
            $sql = "SELECT * FROM toplane WHERE idTop = :idTop";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":idTop", $idTop);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e){
            return 0;
        }
    }

    public function update(Toplane $toplane) {
        try{
            $sql = "UPDATE toplane SET nomeCamp = :nomeCamp, item = :item, counterCamp = :counterCamp, idJg = :idJg WHERE idTop = :idTop";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":nomeCamp", $toplane->getNomeCamp());
            $p->bindValue(":item", $toplane->getItem());
            $p->bindValue(":counterCamp", $toplane->getCounterCamp());
            $p->bindValue(":idJg", $toplane->getIdJg());
            $p->bindValue(":idTop", $toplane->getIdTop());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function apagar($idTop){
        try {
            $sql = "DELETE FROM toplane WHERE idTop = :idTop";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":idTop", $idTop);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }
}