<?php

declare(strict_types=1);

function fib(int $nb = 30): Generator {
  $prev = 0;
  $curr = 1;  
  for ($i=1; $i<= $nb; $i++) {
    yield $curr;
    [$prev, $curr] = [$curr, $prev+$curr];
  }
}

foreach(fib() as $v) {
  echo $v.'<br>';
}


// exo: écrire une fonction générateur yieldant les 30 premiers nombres de la suite de fibonacci
// 1 1 2 3 5 8 13 21....