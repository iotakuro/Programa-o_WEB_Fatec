<?php

namespace Php\Projetolol\Models\DAO;

use Php\Projetolol\Models\Domain\BotLane;

class BotLaneDAO{
    private Conect $conect;

    public function __construct(){
        $this->conect = new Conect();
    }
    
    public function insert(Botlane $botlane){
        try{
            $sql = "INSERT INTO botlane  (idJg, nomeCamp, item, counterCamp) VALUES(:idJg, :nomeCamp, :item, :counterCamp)";
            $query = $this->conect->getConect()->prepare($sql);
            $query->bindValue(":idJg", $botlane->getIdJg());
            $query->bindValue(":nomeCamp", $botlane->getNomeCamp());
            $query->bindValue(":item", $botlane->getItem());
            $query->bindValue(":counterCamp", $botlane->getCounterCamp());
            return $query->execute();
        }catch(\Exception $e){
            return 0;
        }
    }
    public function consulta(){
        try{
            $sql = "SELECT * FROM botlane";
            return $this->conect->getConect()->query($sql);
        }catch(\Exception $e){
            return 0;
        }
    }
    public function consultarJg(){
        try{
            $sql = "SELECT botlane.*, jungle.idJg FROM botlane INNER JOIN jungle ON botlane.idBot = jungle.idJg";
            return $this->conect->getConect()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }
    public function consultaid($idBot){
        try{
            $sql = "SELECT * FROM botlane WHERE idBot = :idBot";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":idBot", $idBot);
            $p->execute();
            return $p->fetch();
        }catch(\Exception $e){
            return 0;
        }
    }
    public function update(Botlane $botlane){
        try{
            $sql = "UPDATE botlane SET nomeCamp = :nomeCamp, item = :item, counterCamp = :counterCamp, idJg= :idJg WHERE idBot = :idBot";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":nomeCamp", $botlane->getNomeCamp());
            $p->bindValue(":item", $botlane->getItem());
            $p->bindValue(":counterCamp", $botlane->getCounterCamp());
            $p->bindValue(":idJg", $botlane->getIdJg());
            $p->bindValue(":idBot", $botlane->getIdBot());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }
    public function apagar($idBot){
        try {
            $sql = "DELETE FROM botlane WHERE idBot = :idBot";
            $p = $this->conect->getConect()->prepare($sql);
            $p->bindValue(":idBot", $idBot);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }
}