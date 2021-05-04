<?php

namespace App;

class Book implements Productable {
  private float $price;

  public function price():float{
      return $this->price * ( Productable::TVA + 1) ;
  }
  public function setPrice(float $price):void{
      $this->price = $price;
  }
}