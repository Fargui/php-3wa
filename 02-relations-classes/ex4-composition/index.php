<?php

// autoload de composer
require_once('vendor/autoload.php');

use App\{Polygone, Point};


$A = new Point(0, 0);
$B = new Point(1, 0);
$C = new Point(1, 1);
$D = new Point(0, 1);

$square = new Polygone($A, $B, $C, $D);

echo $square->area(); // 1 m2