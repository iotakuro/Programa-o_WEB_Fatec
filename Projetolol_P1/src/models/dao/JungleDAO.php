<?php

namespace Php\Projetolol\Models\DAO;

use Php\Projetolol\Models\Domain\Jungle;

class JungleDAO{
    private Conect $conect;

    public function __construct(){
        $this->conect = new Conect();
    }
    
    public function insert(Jungle $jungle){
        try{
            $sql = "INSERT INTO jungle  (nomeCamp, item, counterCamp) VALUES(:nomeCamp, :item, :counterCamp)";
            $query = $this->conect->getConect()->prepare($sql);
            $query->bindValue(":nomeCamp", $jungle->getNomeCamp());
            $query->bindValue(":item", $jungle->getItem());
            $query->bindValue(":counterCamp", $jungle->getCounterCamp());
            return $query->execute();
        }catch(\Exception $e){
            return 0;
        }
    }
    public function consulta(){
        try{
            $sql = "SELECT * FROM jungle";
            return $this->conect->getConect()->query($sql);
        }catch(\Exception $e){
            return 0;
        }
    }
    public function consultaid($idJg){
        try{
            $sql = "SELECT * FROM jungle WHERE idJg = :idJg";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":idJg", $idJg);
            $p->execute();
            return $p->fetch();
        }catch(\Exception $e){
            return 0;
        }
    }
    public function update(Jungle $jungle){
        try{
            $sql = "UPDATE jungle SET nomeCamp = :nomeCamp, item = :item, counterCamp = :counterCamp WHERE idJg = :idJg";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":nomeCamp", $jungle->getNomeCamp());
            $p->bindValue(":item", $jungle->getItem());
            $p->bindValue(":counterCamp", $jungle->getCounterCamp());
            $p->bindValue(":idJg", $jungle->getIdJg());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }
    public function apagar($idJg){
        try {
            $sql = "DELETE FROM jungle WHERE idJg = :idJg";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":idJg", $idJg);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }
}