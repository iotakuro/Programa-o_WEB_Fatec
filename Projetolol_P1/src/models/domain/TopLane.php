<?php

namespace Php\Projetolol\Models\Domain;

class TopLane
{
    private $idTop;
    private $nomeCamp;
    private $item;
    private $counterCamp;
    private $idJg;

    public function __construct($idtop, $nomeCamp, $item, $counterCamp, $idJg){
        $this->setIdTop($idtop);
        $this->setNomeCamp($nomeCamp);
        $this->setItem($item);
        $this->setCounterCamp($counterCamp);
        $this->setIdJg($idJg);
    }
    public function getIdTop(){
        return $this->idTop;
    }

    public function setIdTop($idTop){
        $this->idTop = $idTop;
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

