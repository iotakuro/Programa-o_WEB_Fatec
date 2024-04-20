<?php

namespace Php\Projetolol\Models\Domain;

class Jungle
{
    private $idJg;
    private $nomeCamp;
    private $item;
    private $counterCamp;

    public function __construct($idJg, $nomeCamp, $item, $counterCamp){
        $this->setIdJg($idJg);
        $this->setNomeCamp($nomeCamp);
        $this->setItem($item);
        $this->setCounterCamp($counterCamp);
    }

    public function getIdJg(){
        return $this->idJg;
    }

    public function setIdJg($idJg){
        $this->idJg = $idJg;
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
}

