<?php

abstract class Shape 
{
  protected string $color;
  protected float $opacity;

  public function __construct(string $color, float $opacity) {
    $this->color = $color;
    $this->opacity = $opacity;
  }

  // Méthodes abstraites : les classes qui héritent devront implémenter leur propre version
  abstract public function draw();
  abstract public function getArea(): float;
}

class Rectangle extends Shape
{
  private float $width;
  private float $height;

  public function __construct(float $width, float $height, string $color, float $opacity) {
    $this->width = $width;
    $this->height = $height;
    parent::__construct($color, $opacity);
  }

  public function draw() {
    echo "<div style=\"background-color:$this->color;opacity:$this->opacity;width:{$this->width}px;height:{$this->height}px;\"></div>";
  }

  public function getArea(): float {
    return $this->width * $this->height;
  }
}

class Circle extends Shape
{
  private float $radius;

  public function __construct(float $radius, string $color, float $opacity) {
    $this->radius = $radius;
    parent::__construct($color, $opacity);
  }

  public function draw() {
    echo "<div style=\"background-color:$this->color;opacity:$this->opacity;width:".(2*$this->radius)."px;height:".(2*$this->radius)."px;border-radius:50%;\"></div>";
  }

  public function getArea(): float {
    return pi() * ($this->radius ** 2);
  }
}

/*
$rect1 = new Rectangle(100, 150, "red", 0.5);
$circle1 = new Circle(120, "green", 0.7);

$rect1->draw();
$circle1->draw();

echo 'AIRE DU RECTANGLE : '.$rect1->getArea().'<br>AIRE DU CERCLE : '.$circle1->getArea();
*/
$shapes = [
  new Rectangle(100, 150, "red", 0.5),
  new Rectangle(80, 120, "red", 0.3),
  new Circle(120, "green", 0.7)
];

foreach($shapes as $shape) {
  $shape->draw();
  echo '<p>AIRE: '.$shape->getArea().'</p>';
}