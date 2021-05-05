<?php

namespace Park\Road;

interface Parkable {
  public function park(string $address, string $place): void;
  public function pay(float $price): void;
}