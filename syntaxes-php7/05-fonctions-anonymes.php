<?php

class Record
{
  private float $price = 4.5;

  public function getPrice(): float
  {
    return $this->price;
  }
}

$showPrice = function (float $mult) {
  return $mult * $this->getPrice();
};



$r = new Record();
echo $showPrice->call($r, 3) . '<br>';
echo $showPrice->call($r, 5) . '<br>';