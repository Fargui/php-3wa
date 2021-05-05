<?php

function myAutoload($className) {
  include_once $className.".php";
}
spl_autoload_register("myAutoload");

$tigre = new Tigre("Jean-Claude");
echo $tigre->sayHello().'<br />';

$lion = new Lion("Jacky");
echo $lion->sayHello().'<br />';