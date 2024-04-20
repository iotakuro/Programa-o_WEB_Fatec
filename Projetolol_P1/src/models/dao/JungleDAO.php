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
}