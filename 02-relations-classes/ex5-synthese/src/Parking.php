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
    $parkable->park($this->address, rand(0, 100));
    $parkable->pay(rand(0,5));
    $this->parkables->attach($parkable);
  }
  public function removePark(Parkable $parkable) {
    // est-ce que le véhicule est présent dans le tableau ? 
    if (!$this->parkables->contains($parkable)) {
      throw new \Error("Véhicule " . $parkable->getName() . " non garé dans ce parking");
    }
    // si oui le retirer (array_splice)
    $this->parkables->detach($parkable);
  }
  public function count(): int {
    return $this->parkables->count();
  }
  public function getAll(): string {
    $str = "<ul>";
    // foreach($this->parkables as $parkable) {
    //   $str .= "<li>$parkable</li>";
    // }
    $this->parkables->rewind();
    while($this->parkables->valid()) {
      echo "<li>" . $this->parkables->current() . "</li>";
      $this->parkables->next();
    }
    $str .= "</ul>";
    return $str;
  }
  public function __toString(): string {
    $str = "<div><p>PARKING au $this->address</p>";
    $str .= "<p>".$this->count()." véhicules garés</p>".$this->getAll()."</div>";
    return $str;
  }
}