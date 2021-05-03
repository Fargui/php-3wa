<?php

abstract class Product 
{
  
  protected string $name;
  private float $price;

  protected static float $tva = 0.2;

  public function __construct(string $name, float $price)
  { 
    $this->name = $name;
    $this->price = $price;
  }

  // PHP 8
  // public function __construct(private string $name, private float $price) {}

  public function getName(): string
  {
    return $this->name;
  }

  public function setName($name): void
  {
    $this->name = $name;

  }

  public function getPrice(): float
  {
    return $this->price;
  }

  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

}

class Book extends Product 
{
  private string $isbn;

  public function __construct(string $name, float $price, string $isbn) 
  {
    $this->isbn = $isbn;
    parent::__construct($name, $price);
  }

  public function getIsbn(): string
  {
    return $this->isbn;
  }

  public function setIsbn(string $isbn)
  {
    $this->isbn = $isbn;
  }

  public function display(): void 
  {
    echo "TITRE: $this->name<br>CODE ISBN: $this->isbn<br>PRIX FINAL: ".($this->getPrice() * (1 + self::$tva));
  }
}

//$product = new Product("Mon produit", 43.21);
//var_dump($product);

$book1 = new Book("Mon livre", 20.00, "ZR3RTGHRTGQ");
$book1->display();

var_dump($book1);