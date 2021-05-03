<?php

namespace Park\Road;

use Park\Vehicle;

final class Car extends Vehicle {
  private string $park = "";

  protected static float $speed = 0.0;

  public function park(string $name, string $place): void {
    $this->park = "adresse: $name, place: $place";
  }

  public function __toString(): string {
    $str = "NAME: $this->name<br>
    ENGINE: $this->engine<br>
    STATUS: $this->status";
    if ($this->status == "stop") {
      $str .= "<br>PARKING : ".$this->park;
    }
    if (self::$speed > 0) {
      $str .= "<br>VITESSE MAX : ".self::$speed;
    }
    return "<p>".$str."</p>";
  }

  public static function setSpeed(float $speed) {
    self::$speed = $speed;
  }
}