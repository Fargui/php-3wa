<?php

require_once('vendor/autoload.php');

use Park\Road\{Car, Bike};
use Park\Plane;

// détermine la vitesse 
Car::setSpeed(180);
Plane::setSpeed(890.5);
Bike::setSpeed(50);

$brompton = new Bike('brompton');
$brompton->setEngine("manual");

$kia = new Car('kia');
$kia->setEngine("essence");

$airbus = new Plane('airbus 320');

echo "<p>$brompton</p><p>$kia</p><p>$airbus</p>";


// $parking = new Parking();
// $parking->addPark($brompton);
// $parking->addPark($kia);
// try {
//     $parking->addPark($airbus); // exception

// } catch (TypeError $e) {
//     echo $e->getMessage();
// }

// echo $parking . "\n";