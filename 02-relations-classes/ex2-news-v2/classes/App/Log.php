<?php

namespace App;

class Log {
  private array $storage = [];
  private int $count = 0;

  public function addLog(string $log) {
    $this->storage[] = $log;
    $this->count++;
  }
  public function getStorage(): array {
    return $this->storage;
  }
}