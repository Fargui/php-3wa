<?php

function xrange($start, $end)
{
  for ($i = $start; $i < $end; $i++) {
    yield $i;
  }
}

function autreGenerateur()
{
  yield "hello";
  yield "coucou";
  yield "salut";
}

foreach (xrange(1, 100) as $num) {
  echo $num . '<br>';
}

foreach (autreGenerateur() as $value) {
  echo $value . '<br>';
}