<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\MidlaneDAO;
use Php\Projetolol\Models\Domain\MidLane;

class MidLaneController{
    public function index($params){
        $MidlaneDAO = new MidlaneDAO();
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
        require_once ("../src/views/midlane/index.php");
    }
    public function insert($params){
        require_once("../src/views/MidLane/insert_midlane.php");
    }
    
    public function new($params){
        $midlane = new Midlane($_POST['idMid'],$_POST['nomeCamp'],$_POST['item'],$_POST['counterCamp'], $_POST['idJg']);
        $midlaneDAO = new MidlaneDAO();
        if($midlaneDAO->insert($midlane)){
            header('location: /midlane/insert/true');
        }
        else{
            header('location: /midlane/insert/false');
        }

    }
    public function updateID($params){
        $midlaneDAO = new MidlaneDAO();
        $resultado = $midlaneDAO->consultaid($params[1]);
        require_once("../src/views/midlane/update_midlane.php");
    }

    public function update($params){
        $midlane = new Midlane($_POST['idMid'], $_POST['nomeCamp'], $_POST['item'], $_POST['counterCamp'], $_POST['idJg']);
        $midlaneDAO = new MidlaneDAO();
        if($midlaneDAO->update($midlane)){
            header('location: /midlane/updateID/true');
        }
        else{
            header('location: /midlane/updateID/false');
        }
    }
    public function excluirID($params){
        $midlaneDAO = new MidlaneDAO();
        $resultado = $midlaneDAO->consultaid($params[1]);
        require_once("../src/views/midlane/delete_midlane.php");
    }
    public function destroy($params){
        $midlaneDAO = new MidlaneDAO();
        if($midlaneDAO->apagar($_POST['idMid'])){
            header('location: /midlane/apagar/true');
        }
        else{
            header('location: /midlane/apagar/false');
        }
    }
}




