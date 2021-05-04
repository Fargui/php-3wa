<?php

namespace App;

class Shop {
  private $products = [];

  public function add( Productable $product ){
      $this->products[] = $product;
  }

  public function products(){
  
      foreach($this->products as $product)
          echo $product->price() . "\n";
  }
}