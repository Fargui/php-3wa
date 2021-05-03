<?php

namespace Park\Road;

use Park\Vehicle;

final class Car extends Vehicle {
  private string $park = "";

  public function park(string $name, string $place): void {
    $this->park = "ADRESSE: $name, PLACE: $place";
  }

  public function __toString(): string {
    return 'CAR';
  }
}