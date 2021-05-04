<?php

namespace App;

interface Productable {
  const TVA = .2;

  public function price():float;
  public function setPrice(float $price):void;
}