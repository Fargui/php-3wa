<?php

namespace Park;

use Park\Road\Parkable;
use SplObjectStorage;

class Parking {
  private string $address;
  private SplObjectStorage $parkables;

  public function __construct(string $address)
  {
    $this->address = $address;
    $this->parkables = new SplObjectStorage();
  }

  public function addPark(Parkable $parkable) {
    // $parkable->park($this->address, rand(0, 100));
    // $parkable->pay(rand(0,5));
    // $this->parkables[] = $parkable;
  }
  public function removePark(Parkable $parkable) {
    // // est-ce que le véhicule est présent dans le tableau ? si oui à quel index (array_search) ?
    // $index = array_search($parkable, $this->parkables);
    // if ($index === false) {
    //   throw new \Error("Véhicule " . $parkable->getName() . " non garé dans ce parking");
    // }
    // // si oui le retirer (array_splice)
    // array_splice($this->parkables, $index, 1);
  }
  public function count(): int {
    // return count($this->parkables);
  }
}