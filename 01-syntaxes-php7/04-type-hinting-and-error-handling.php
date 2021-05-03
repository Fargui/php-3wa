<?php

declare(strict_types=1);

function add(int $a, int $b): ?int
{
  if ($a === 10) {
    return null;
  }
  if ($a === 20) {
    $a->get();
  }
  if ($a === 30) {
    throw new ValueError("J'aime pas la valeur 30");
  }
  return $a + $b;
}

$valuePairs = [
  [2, 5],
  [10, 2],
  ['hello', 'world'], // erreur déclenchée automatiquement par le type hinting
  [6, 8],
  [20, 2],    // erreur déclenchée automatiquement par l'appel d'une méthode get inexistante sur un int
  [9, 10],
  [30, 5]
];

foreach ($valuePairs as $valuePair) {
  try {
    echo add($valuePair[0], $valuePair[1]) . '<br>';
  } catch (TypeError $e) {
    echo 'ERREUR DE TYPAGE: ' . $e->getMessage() . '<br>';
  } catch (ValueError $e) {
    echo 'ERREUR DE VALEUR : ' . $e->getMessage() . '<br>';
  } catch (Error $e) {
    echo 'ERREUR : ' . $e->getMessage() . '<br>';
  }
}