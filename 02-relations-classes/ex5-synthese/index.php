<?php

require_once('vendor/autoload.php');

use Park\Road\{Car, Bike};
use Park\{Plane, Parking, Ferry};

// détermine la vitesse 
Car::setSpeed(180);
Plane::setSpeed(890.5);
Bike::setSpeed(50);

$brompton = new Bike('brompton');
$brompton->setEngine("manual");

$kia = new Car('kia');
$kia->setEngine("essence");

$airbus = new Plane('airbus 320');

$parking = new Parking("1 rue Azerty");
$parking->addPark($brompton);
$parking->addPark($kia);
try {
    $parking->addPark($airbus); // exception
} catch (TypeError $e) {
    echo '<p style="color:red;">'.$e->getMessage().'</p>';
}
try {
  $parking->removePark($brompton);
} catch (Error $e) {
  echo '<p style="color:red;">'.$e->getMessage().'</p>';
}

//var_dump($parking);
//echo $parking . "\n";

$ferry = new Ferry("Ferry 1", $parking);
var_dump($ferry);