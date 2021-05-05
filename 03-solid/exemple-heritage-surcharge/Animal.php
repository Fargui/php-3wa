<?php

class Animal {
  protected string $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function sayHello(): string {
    return "Je m'appelle $this->name";
  }
}