<?php

class Lion extends Animal {
  
  // Surcharge de la méthode du même nom héritée de Animal
  // En PHP pour surcharger une méthode on doit respecter sa signature (nom de la fonction, nb d'arguments, type des arguments et de la sortie s'il y a du type hinting)
  public function sayHello(): string {
    return "RAWWWWR! Je m'appelle $this->name";
  }
} 