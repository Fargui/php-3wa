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
$brompton->park("1 rue Azerty", "B5");
$brompton->pay(1.2);
$brompton->pay(1.2);

$kia = new Car('kia');
$kia->setEngine("essence");
$kia->park("1 rue Azerty", "C6");
$kia->pay(4.5);

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