<?php

namespace Park;

final class Plane extends Vehicle {
  private string $category = "";

  protected static float $speed = 0.0;

  public function setCategory(string $category) {
    $this->category = $category;
  }

  public function __toString(): string {
    $str =  "<p>NAME: $this->name<br>
    ENGINE: $this->engine<br>";
    if ($this->category !== "") {
      $str .= "CATEGORY: $this->category<br>";
    }
    if (self::$speed > 0) {
      $str .= "VITESSE MAX : ".self::$speed."<br>";
    }
    $str .= "STATUS: $this->status</p>";
    return $str;
  }

  public static function setSpeed(float $speed) {
    self::$speed = $speed;
  }
}