<?php

// fonction perso d'autoload
function newsAutoload($className) {
  require_once("classes/".str_replace("\\", "/", $className).".php");
};
// enregistrement de la fonction d'autoload
spl_autoload_register("newsAutoload");

use App\{ManageNews,Log};


$n1 = new ManageNews("Article PHP");
$n2 = new ManageNews("Article MySQL");
$n3 = new ManageNews("Article JS");
$n4 = new ManageNews("Article MongoDB");
$n5 = new ManageNews("Article Python");

var_dump(Log::getStorage());