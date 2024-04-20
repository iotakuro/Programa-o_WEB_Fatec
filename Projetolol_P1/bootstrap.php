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
  '/toplane/insert',
  'Php\Projetolol\Controllers\TopLaneController@insert'
);

$r->post(
  '/toplane/new',
  'Php\Projetolol\controllers\TopLaneController@new'
);

$r->get(
  '/midlane/insert',
  'Php\Projetolol\Controllers\MidLaneController@insert'
);

$r->post(
  '/midlane/new',
  'Php\Projetolol\controllers\MidLaneController@new'
);

$r->get(
  '/botlane/insert',
  'Php\Projetolol\Controllers\BotLaneController@insert'
);

$r->post(
  '/botlane/new',
  'Php\Projetolol\controllers\BotLaneController@new'
);
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



