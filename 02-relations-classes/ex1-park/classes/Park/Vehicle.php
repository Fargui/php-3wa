<?php

namespace Park;

abstract class Vehicle {
  private string $status;
  private string $name;
  private string $engine;

  public function __construct (string $name) {
    $this->name = $name;
  }

  public function setStatus(string $status): void {
    $this->status = $status;
  }

  public function setEngine(string $engine): void {
    $this->engine = $engine;
  }

  //abstract public function speed(): float;
  abstract public function __toString(): string;
}