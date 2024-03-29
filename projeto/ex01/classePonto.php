<?php
class Ponto {
  private static $numeroPontos = 0;
  private $x;
  private $y;

  public function __construct(int $x, int $y) {
    $this->x = $x;
    $this->y = $y;
    self::$numeroPontos++;
  }

  public function setX(int $x): void {
    $this->x = $x;
  }

  public function getX(): int {
    return $this->x;
  }

  public function setY(int $y): void {
    $this->y = $y;
  }

  public function getY(): int {
    return $this->y;
  }

  public function deslocar(int $dx, int $dy): void {
    $this->x += $dx;
    $this->y += $dy;
  }

  public function toString(): string {
    return "Ponto (" . $this->x . ", " . $this->y . ")";
  }

  public static function getNumeroPontos(): int {
    return self::$numeroPontos;
  }

  public function distancia(Ponto $outroPonto): float {
    $dx = $this->x - $outroPonto->x;
    $dy = $this->y - $outroPonto->y;
    return sqrt(pow($dx, 2) + pow($dy, 2));
  }

  public static function distanciaXY(int $x1, int $y1, int $x2, int $y2): float {
    $dx = $x1 - $x2;
    $dy = $y1 - $y2;
    return sqrt(pow($dx, 2) + pow($dy, 2));
  }
}

?>
