<?php

// fonction perso d'autoload
function myAutoload($className) {
  require_once("classes/".str_replace("\\", "/", $className).".php");
};
// enregistrement de la fonction d'autoload
spl_autoload_register("myAutoload");

use App\{Circle, Color};

$circle = new Circle;
$name = $circle?->getColor()?->getName();
echo $name ?? "no color\n";

$red = new Color('red');
$blue= new Color('blue');

$circle->setColor($red);
echo $circle->getColor()->getName() . "\n"; 

$circle->setColor($blue);
echo $circle->getColor()->getName() . "\n";