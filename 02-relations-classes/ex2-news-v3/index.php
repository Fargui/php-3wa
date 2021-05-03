<?php

// autoload de composer
require_once('vendor/autoload.php');

use App\{ManageNews,Log};

$logger1 = new Log();
$logger2 = new Log();

$n1 = new ManageNews($logger1, "Article PHP");
$n2 = new ManageNews($logger1, "Article MySQL");
$n3 = new ManageNews($logger1, "Article JS");
$n4 = new ManageNews($logger2, "Article MongoDB");
$n5 = new ManageNews($logger2, "Article Python");

var_dump($logger1->getStorage());
var_dump($logger2->getStorage());