<?php

// fonction perso d'autoload
function parkAutoload($className) {
  require_once("classes/".str_replace("\\", "/", $className).".php");
};
// enregistrement de la fonction d'autoload
spl_autoload_register("parkAutoload");

use Park\Road\Car;
use Park\Plane;

// détermine la vitesse 
//Car::setSpeed(180);

// $name 
$kia = new Car('Kia');
$kia->setEngine('electric');

$kia->park('Place de la liberté', '56A');
$kia->setStatus('stop');

// méthode magique permettant d'afficher les informations
echo  $kia . "\n";
// Name: Kia, Engine: electric, Status: stop, Park address: Place du chateau place: 56A

echo "\n";

// Plane
//Plane::setSpeed(890);

// $name 
$plane = new Plane('Airbus A320');
$plane->setEngine('petrol');
$plane->setStatus('flight');

echo $plane . "\n";