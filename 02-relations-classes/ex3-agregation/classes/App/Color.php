<?php

namespace App;

class Color {

  private string $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function getName():string{
    return $this->name;
  }
  public function setName(string $name):void{
    $this->name = $name;
  }
}

