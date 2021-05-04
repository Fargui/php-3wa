<?php

namespace Park;

class Ferry extends Vehicle implements Navigable {

  private array $parkings = [];

  protected static float $speed = 0.0;

  public function __construct(string $name, Parking $parking) {
    parent::__construct($name);
  }

  public static function setSpeed(float $speed) {
    self::$speed = $speed;
  }
  public function __toString(): string {
    return "";
  }
}