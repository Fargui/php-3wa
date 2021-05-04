<?php

namespace App;


class Polygone {
  private array $points;

  public function __construct(Point $p1,Point $p2,Point $p3,Point $p4 ) {
    $this->points = [$p1, $p2, $p3, $p4];
  }

  public function area():float{
    return rand(0, 100);
  }
}