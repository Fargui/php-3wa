<?php

declare(strict_types=1);

function fib(int $nb = 30): Generator {
  yield 1;
  yield 1;
  yield 2;
}

foreach(fib() as $v) {
  echo $v.'<br>';
}


// exo: écrire une fonction générateur yieldant les 30 premiers nombres de la suite de fibonacci
// 1 1 2 3 5 8 13 21....