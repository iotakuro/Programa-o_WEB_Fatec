<?php

namespace Php\Projetolol\Controllers;

use Php\Projetolol\Models\DAO\JungleDAO;
use Php\Projetolol\Models\Domain\Jungle;

class JungleController{
    public function index($params){
        $jungleDAO = new JungleDAO();
        $resultado = $jungleDAO->consulta();
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
        require_once ("../src/views/jungle/index.php");
    }
    public function insert($params){
        require_once("../src/views/jungle/insert_jungle.php");
    }

    public function new($params){
        $jungle = new Jungle(0,$_POST['nome'],$_POST['items'],$_POST['counters']);
        $jungleDAO = new JungleDAO();
        if($jungleDAO->insert($jungle)){
            header('location: /jungle/insert/true');
        }
        else{
            header('location: /jungle/insert/false');
        }

    }
    public function updateID($params){
        $jungleDAO = new JungleDAO();
        $resultado = $jungleDAO->consultaid($params[1]);
        require_once("../src/views/jungle/update_jungle.php");
    }

    public function update($params){
        $jungle = new Jungle($_POST['idJg'], $_POST['nomeCamp'], $_POST['item'], $_POST['counterCamp']);
        $jungleDAO = new JungleDAO();
        if($jungleDAO->update($jungle)){
            header('location: /jungle/updateID/true');
        }
        else{
            header('location: /jungle/updateID/false');
        }
    }
    public function excluirID($params){
        $jungleDAO = new JungleDAO();
        $resultado = $jungleDAO->consultaid($params[1]);
        require_once("../src/views/jungle/delete_jungle.php");
    }
    public function destroy($params){
        $jungleDAO = new JungleDAO();
        if($jungleDAO->apagar($_POST['idJg'])){
            header('location: /jungle/apagar/true');
        }
        else{
            header('location: /jungle/apagar/false');
        }
    }
}




