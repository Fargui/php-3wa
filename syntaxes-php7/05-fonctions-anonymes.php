<?php

class Record
{
  private $price = 4.5;

  public function getPrice()
  {
    return $this->price;
  }
}

$showPrice = function ($mult) {
  return $mult * $this->getPrice();
};



$r = new Record();
echo $showPrice->call($r, 3) . '<br>';
echo $showPrice->call($r, 5) . '<br>';