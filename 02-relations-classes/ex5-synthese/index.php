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

$parking = new Parking("Pont A");
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

$twingo = new Car("twingo");
$twingo->setEngine("essence");

$parking2 = new Parking("Pont B");
$parking2->addPark($twingo);

//var_dump($parking);
//echo $parking . "\n";

Ferry::setSpeed(20);
$ferry = new Ferry("Ferry 1");
$ferry->addParking($parking);
$ferry->addParking($parking2);

echo $ferry;

var_dump($ferry);