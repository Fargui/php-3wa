<?php

class Product 
{
  
  private string $name;
  private float $price;

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
}

$book1 = new Book("Mon livre", 12.34, "ZR3RTGHRTGQ");

var_dump($book1);