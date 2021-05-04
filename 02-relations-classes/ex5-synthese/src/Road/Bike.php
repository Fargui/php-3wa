<?php

namespace Park\Road;

use Park\Vehicle;

class Bike extends Vehicle implements Parkable {
  private string $park = "";
  private float $paymentsSum = 0.0;

  protected static float $speed = 0.0;

  public function park(string $name, string $place): void {
    $this->setStatus("parked");
    $this->park = "adresse: $name, place: $place";
  }

  public function pay(float $price) {
    $this->paymentsSum += $price; 
  }

  public static function setSpeed(float $speed) 
  {
    self::$speed = $speed;
  }
  public function __toString(): string 
  {
    $str = "NAME: $this->name<br>
    ENGINE: $this->engine<br>
    STATUS: $this->status";
    if ($this->status == "stop") {
      $str .= "<br>PARKING : ".$this->park;
    }
    if (self::$speed > 0) {
      $str .= "<br>VITESSE MAX : ".self::$speed;
    }
    $str .= "<br>SOMME TOTALE PAYEE POUR LE PARKING : ".$this->paymentsSum;
    return "<p>".$str."</p>";    
  }
}