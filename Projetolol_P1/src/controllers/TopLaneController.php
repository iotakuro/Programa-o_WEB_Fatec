<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\ToplaneDAO;
use Php\Projetolol\Models\Domain\TopLane;

class TopLaneController{
    public function index($params){
        $MidlaneDAO = new ToplaneDAO();
        $resultado = $MidlaneDAO->consulta();
        $acao = $params[1] ?? "";
        $status = $params[2] ?? "";
        if ($acao == "insert" && $status == "true")
            $mensagem = "Registro inserido com sucesso!";
        elseif ($acao == "insert" && $status == "false")
            $mensagem = "Erro ao inserir!";
        elseif ($acao == "updateID" && $status == "true")
            $mensagem = "Registro alterado com sucesso!";
        elseif ($acao == "updateID" && $status == "false")
            $mensagem = "Erro ao alterar!";
        elseif ($acao == "apagar" && $status == "true")
            $mensagem = "Registro excluido com sucesso!";
        elseif ($acao == "apagar" && $status == "false")
            $mensagem = "Erro ao excluir!";
        else
            $mensagem = "";
        require_once ("../src/views/toplane/index.php");
    }
    public function insert($params){
        require_once("../src/views/toplane/insert_toplane.php");
    }

    public function new($params){
        $toplane = new TopLane($_POST['idTop'],$_POST['nomeCamp'],$_POST['item'],$_POST['counterCamp'], $_POST['idJg']);
        $toplaneDAO = new ToplaneDAO();
        if($toplaneDAO->insert($toplane)){
            header('location: /toplane/insert/true');
        }
        else{
            header('location: /toplane/insert/false');
        }

    }
    public function updateID($params){
        $toplaneDAO = new ToplaneDAO();
        $resultado = $toplaneDAO->consultaid($params[1]);
        require_once("../src/views/toplane/update_toplane.php");
    }

    public function update($params){
        $toplane = new TopLane($_POST['idTop'], $_POST['nomeCamp'], $_POST['item'], $_POST['counterCamp'], $_POST['idJg']);
        $toplaneDAO = new ToplaneDAO();
        if($toplaneDAO->update($toplane)){
            header('location: /toplane/updateID/true');
        }
        else{
            header('location: /toplane/updateID/false');
        }
    }
    public function excluirID($params){
        $toplaneDAO = new ToplaneDAO();
        $resultado = $toplaneDAO->consultaid($params[1]);
        require_once("../src/views/toplane/delete_toplane.php");
    }
    public function destroy($params){
        $toplaneDAO = new ToplaneDAO();
        if($toplaneDAO->apagar($_POST['idTop'])){
            header('location: /toplane/apagar/true');
        }
        else{
            header('location: /toplane/apagar/false');
        }
    }
}




