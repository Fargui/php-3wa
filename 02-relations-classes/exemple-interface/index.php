<?php

// fonction perso d'autoload
function myAutoload($className) {
  require_once("classes/".str_replace("\\", "/", $className).".php");
};
// enregistrement de la fonction d'autoload
spl_autoload_register("myAutoload");

use App\{Shop, Book, Record, Potato};

$p1 = new Book();
$p1->setPrice(12);
$p2 = new Book();
$p2->setPrice(2.7);
$p3 = new Book();
$p3->setPrice(20.5);
$p4 = new Record();
$p4->setPrice(30);
$p5 = new Record();
$p5->setPrice(24);
$p6 = new Potato();
$p6->setPrice(2.5);

$shop = new Shop();
$shop->add($p1);
$shop->add($p2);
$shop->add($p3);
$shop->add($p4);
$shop->add($p5);
//$shop->add($p6); // fatal error car Potato n'implémente pas Productable


/* $shop->products(); */