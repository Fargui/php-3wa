<?php

namespace Park\Road;

use Park\Vehicle;

class Bike extends Vehicle {
  protected static float $speed = 0.0;

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
    return "<p>".$str."</p>";    
  }
}