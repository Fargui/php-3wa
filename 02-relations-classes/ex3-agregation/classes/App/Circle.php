<?php

namespace App;

use App\Color;

class Circle {
  
private ?Color $color = null;

  
  public function getColor(): ?Color{
    return $this->color;
  }

  public function setColor(Color $color): void{
    $this->color = $color;
  }
}