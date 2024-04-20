<?php

namespace Php\Projetolol\Models\Domain;

class MidLane
{
    private $idmid;
    private $nomeCamp;
    private $item;
    private $counterCamp;
    private $idJg;

    public function __construct($idmid, $nomeCamp, $item, $counterCamp, $idJg){
        $this->setIdMid($idmid);
        $this->setNomeCamp($nomeCamp);
        $this->setItem($item);
        $this->setCounterCamp($counterCamp);
        $this->setIdJg($idJg);
    }
    public function getIdMid(){
        return $this->idmid;
    }

    public function setIdMid($idmid){
        $this->idMid = $idmid;
    }
    
    public function getNomeCamp(){
        return $this->nomeCamp;
    }

    public function setNomeCamp($nomeCamp){
        $this->nomeCamp = $nomeCamp;
    }

    public function getItem(){
        return $this->item;
    }

    public function setItem($item){
        $this->item = $item;
    }

    public function getCounterCamp(){
        return $this->counterCamp;
    }

    public function setCounterCamp($counterCamp){
        $this->counterCamp = $counterCamp;
    }
    
    public function getIdJg(){
        return $this->idJg;
    }

    public function setIdJg($idJg){
        $this->idJg = $idJg;
    }
}

