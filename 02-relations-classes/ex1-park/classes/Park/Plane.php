<?php

namespace Park;

final class Plane extends Vehicle {
  private string $category = "";

  public function setCategory(string $category) {
    $this->category = $category;
  }

  public function __toString(): string {
    return 'PLANE';
  }
}