<?php

// fonction perso d'autoload
function myAutoload($className) {
  require_once("classes/".str_replace("\\", "/", $className).".php");
};
// enregistrement de la fonction d'autoload
spl_autoload_register("myAutoload");

use App\{Polygon, Point};

$A = new Point(0, 0);
$B = new Point(1, 0);
$C = new Point(1, 1);
$D = new Point(0, 1);

$square = new Polygon($A, $B, $C, $D);

var_dump($square);

echo $square->area(); // 1 m2