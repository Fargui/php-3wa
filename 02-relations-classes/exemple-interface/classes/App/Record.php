<?php

namespace App;

class Record implements Productable {
  private float $price;
  private float $discount = 0.1;

  public function price():float{
      return ($this->price * (1 - $this->discount) * ( Productable::TVA + 1)) ;
  }
  public function setPrice(float $price):void{
      $this->price = $price;
  }

  public function getDiscount(): float
  {
    return $this->discount;
  }

  public function setDiscount(float $discount)
  {
    $this->discount = $discount;
  }
}