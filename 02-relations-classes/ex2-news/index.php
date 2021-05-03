<?php

// fonction perso d'autoload
function newsAutoload($className) {
  require_once("classes/".str_replace("\\", "/", $className).".php");
};
// enregistrement de la fonction d'autoload
spl_autoload_register("newsAutoload");

use App\{ManageNews,Log};


$n1 = new ManageNews(new Log, "Article PHP");
$n2 = new ManageNews(new Log, "Article MySQL");
$n3 = new ManageNews(new Log, "Article JS");
$n4 = new ManageNews(new Log, "Article MongoDB");
$n5 = new ManageNews(new Log, "Article Python");

var_dump(Log::getStorage());