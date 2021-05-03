<?php

namespace App;

use \DateTime;
use \DateTimeZone;

class ManageNews {
  private string $title;

  public function __construct(string $title) {
    $this->title=$title;
    $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
    Log::addLog($title." ".$date->format('d/m/Y H:i:s'));
  }
}