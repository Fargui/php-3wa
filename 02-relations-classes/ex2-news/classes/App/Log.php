<?php

namespace App;

class Log {
  private static array $storage = [];
  private static int $count = 0;

  public static function addLog(string $log) {
    self::$storage[] = $log;
  }
  public static function getStorage(): array {
    return self::$storage;
  }
}