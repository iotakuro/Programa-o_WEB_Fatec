<?php

require __DIR__ . "/vendor/autoload.php";


$metodo = $_SERVER['REQUEST_METHOD'];
$caminho = $_SERVER['PATH_INFO'] ?? '/';

$r = new Php\Projetolol\Router($metodo, $caminho);

$r->get(
  '/jungle/insert',
  'Php\Projetolol\Controllers\JungleController@insert'
);

$r->post(
  '/jungle/new',
  'Php\Projetolol\controllers\JungleController@new'
);

$r->get(
  '/jungle',
  'Php\Projetolol\Controllers\JungleController@index'
);

$r->get(
  '/jungle/{acao}/{status}',
  'Php\Projetolol\Controllers\JungleController@index'
);

$r->get(
  '/jungle/updateID/id/{id}',
  'Php\Projetolol\Controllers\JungleController@updateID'
);

$r->post(
  '/jungle/update',
  'Php\Projetolol\controllers\JungleController@update'
);

$r->get(
  '/jungle/excluirID/id/{id}',
  'Php\Projetolol\Controllers\JungleController@excluirID'
);

$r->post(
  '/jungle/destroy',
  'Php\Projetolol\controllers\JungleController@destroy'
);

// 

$r->get(
  '/toplane/insert',
  'Php\Projetolol\Controllers\TopLaneController@insert'
);

$r->post(
  '/toplane/new',
  'Php\Projetolol\controllers\TopLaneController@new'
);

$r->get(
  '/toplane',
  'Php\Projetolol\Controllers\TopLaneController@index'
);

$r->get(
  '/toplane/{acao}/{status}',
  'Php\Projetolol\Controllers\TopLaneController@index'
);

$r->get(
  '/toplane/updateID/id/{id}',
  'Php\Projetolol\Controllers\TopLaneController@updateID'
);

$r->post(
  '/toplane/update',
  'Php\Projetolol\controllers\TopLaneController@update'
);

$r->get(
  '/toplane/excluirID/id/{id}',
  'Php\Projetolol\Controllers\TopLaneController@excluirID'
);

$r->post(
  '/toplane/destroy',
  'Php\Projetolol\controllers\TopLaneController@destroy'
);

// 

// 
$r->get(
  '/midlane/insert',
  'Php\Projetolol\Controllers\MidLaneController@insert'
);

$r->post(
  '/midlane/new',
  'Php\Projetolol\controllers\MidLaneController@new'
);

$r->get(
  '/midlane',
  'Php\Projetolol\Controllers\MidLaneController@index'
);

$r->get(
  '/midlane/{acao}/{status}',
  'Php\Projetolol\Controllers\MidLaneController@index'
);

$r->get(
  '/midlane/updateID/id/{id}',
  'Php\Projetolol\Controllers\MidLaneController@updateID'
);

$r->post(
  '/midlane/update',
  'Php\Projetolol\controllers\MidLaneController@update'
);

$r->get(
  '/midlane/excluirID/id/{id}',
  'Php\Projetolol\Controllers\MidLaneController@excluirID'
);

$r->post(
  '/midlane/destroy',
  'Php\Projetolol\controllers\MidLaneController@destroy'
);

// 

// 

$r->get(
  '/botlane/insert',
  'Php\Projetolol\Controllers\BotLaneController@insert'
);

$r->post(
  '/botlane/new',
  'Php\Projetolol\controllers\BotLaneController@new'
);

$r->get(
  '/botlane',
  'Php\Projetolol\Controllers\BotlaneController@index'
);

$r->get(
  '/botlane/{acao}/{status}',
  'Php\Projetolol\Controllers\BotlaneController@index'
);

$r->get(
  '/botlane/updateID/id/{id}',
  'Php\Projetolol\Controllers\BotlaneController@updateID'
);

$r->post(
  '/botlane/update',
  'Php\Projetolol\controllers\BotlaneController@update'
);

$r->get(
  '/botlane/excluirID/id/{id}',
  'Php\Projetolol\Controllers\BotlaneController@excluirID'
);

$r->post(
  '/botlane/destroy',
  'Php\Projetolol\controllers\BotlaneController@destroy'
);

// 

$resultado = $r->handler();

if(!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

if ($resultado instanceof Closure){
    echo $resultado($r->getParams());
} elseif (is_string($resultado)){
    $resultado = explode("@", $resultado);
    $controller = new $resultado[0];
    $resultado = $resultado[1];
    echo $controller->$resultado($r->getParams());
}



