<?php

namespace Park;

class Ferry extends Vehicle implements Navigable {

  private array $parkings = [];

  protected static float $speed = 0.0;

  public static function setSpeed(float $speed) {
    self::$speed = $speed;
  }
  public function __toString(): string {
    $str = "<div>FERRY<br>
    NAME: $this->name";
    if (self::$speed > 0) {
      $str .= "<br>VITESSE MAX : ".self::$speed;
    }
    foreach($this->parkings as $parking) {
      $str .= $parking;
    }
    $str .= "</div>";
    return $str;
  }

  public function addParking(Parking $parking) {
    $this->parkings[] = $parking;
  }
}