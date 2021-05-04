<?php

namespace Park;

use Park\Road\Parkable;

class Parking {
  private string $address;
  private array $parkables = [];

  public function __construct(string $address)
  {
    $this->address = $address;
  }

  public function addPark(Parkable $parkable) {
    $parkable->park($this->address, rand(0, 100));
    $parkable->pay(rand(0,5));
    $this->parkables[] = $parkable;
  }
  public function removePark(Parkable $parkable) {
    // est-ce que le véhicule est présent dans le tableau ? si oui à quel index (array_search) ?

    // si oui le retirer (array_splice)
  }
  public function count(): int {
    return count($this->parkables);
  }
}