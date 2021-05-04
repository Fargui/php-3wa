<?php

namespace App;

class Point {
  private array $coordinates;

  public function __construct(float $x, float $y) {
    $this->coordinates = [$x, $y];
  }

  public function getCoordinate() {
    return $this->coordinates;
  }

  public function setCoordinate(float $x, float $y): void {
    $this->coordinates = [$x, $y];
  }
  //on utilise pas les getteur et setter dans le code principal mais on peut s'en servir
}