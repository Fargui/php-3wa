<?php

namespace Park;

abstract class Vehicle {
  protected string $status = "active";
  protected string $name;
  protected string $engine = "";

  public function __construct (string $name) {
    $this->name = $name;
  }

  public function setStatus(string $status): void {
    $this->status = $status;
  }

  public function setEngine(string $engine): void {
    $this->engine = $engine;
  }

  abstract public static function setSpeed(float $speed);
  abstract public function __toString(): string;

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }
}