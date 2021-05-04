<?php

namespace App;

class Point {
  private array $coordinates;

  public function __construct(float $x, float $y) {
    $this->coordinates = [$x, $y];
  }

  public function setCoordinates(float $x, float $y): void {
    $this->coordinates = [$x, $y];
  }

  public function getCoordinates(): array {
    return $this->coordinates;
  }
}