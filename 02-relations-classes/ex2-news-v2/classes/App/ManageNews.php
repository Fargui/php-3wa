<?php

namespace App;

use \DateTime;
use \DateTimeZone;

class ManageNews {
  private string $title;

  public function __construct(Log $logger, string $title) {
    $this->title=$title;
    $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
    $logger->addLog($this->title." ".$date->format('d/m/Y H:i:s'));
  }
}