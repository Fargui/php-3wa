<?php

namespace Park\Road;

interface Parkable {
  public function park(string $address, string $place);
  public function pay(float $price);
}