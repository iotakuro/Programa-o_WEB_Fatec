<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\BotlaneDAO;
use Php\Projetolol\Models\Domain\BotLane;

class BotLaneController{
    public function index($params){
        $botlaneDAO = new BotlaneDAO();
        $resultado = $botlaneDAO->consulta();
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
        require_once ("../src/views/botlane/index.php");
    }
    public function insert($params){
        require_once("../src/views/botlane/insert_botlane.php");
    }

    public function new($params){
        $botlane = new Botlane($_POST['idBot'], $_POST['nomeCamp'],$_POST['item'],$_POST['counterCamp'], $_POST['idJg']);
        $botlaneDAO = new BotlaneDAO();
        if($botlaneDAO->insert($botlane)){
            header('location: /botlane/insert/true');
        }
        else{
            header('location: /botlane/insert/false');
        }

    }
    public function updateID($params){
        $botlaneDAO = new BotlaneDAO();
        $resultado = $botlaneDAO->consultaid($params[1]);
        require_once("../src/views/botlane/update_botlane.php");
    }

    public function update($params){
        $botlane = new Botlane($_POST['idBot'], $_POST['nomeCamp'], $_POST['item'], $_POST['counterCamp'], $_POST['idJg']);
        $botlaneDAO = new BotlaneDAO();
        if($botlaneDAO->update($botlane)){
            header('location: /botlane/updateID/true');
        }
        else{
            header('location: /botlane/updateID/false');
        }
    }
    public function excluirID($params){
        $botlaneDAO = new BotlaneDAO();
        $resultado = $botlaneDAO->consultaid($params[1]);
        require_once("../src/views/botlane/delete_botlane.php");
    }
    public function destroy($params){
        $botlaneDAO = new BotlaneDAO();
        if($botlaneDAO->apagar($_POST['idBot'])){
            header('location: /botlane/apagar/true');
        }
        else{
            header('location: /botlane/apagar/false');
        }
    }
}