<?php

namespace App;

class Potato {
  private float $price;

  public function price():float{
      return $this->price;
  }
  public function setPrice(float $price):void{
      $this->price = $price;
  }
}