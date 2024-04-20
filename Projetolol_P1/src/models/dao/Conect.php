<?php

namespace Php\Projetolol\Models\DAO;

use PDO;

class Conect
{
  private $conect;

  public function __construct()
  {
    $this->conect = new PDO("mysql:host=localhost; dbname=rift", "root", "");
  }

  public function getConect()
  {
    return $this->conect;
  }
}