<?php

namespace Reporting\Format;

use Reporting\Report;

class PHPSerializedFormatter implements FormatterInterface, DeserializeInterface {
  public function format(Report $report): string
  {
    $contents = $report->getContents();
    return serialize($contents);
  }

  public function deserialize(string $input): Report
  {
    $contents = unserialize($input);
    return new Report($contents['date'], $contents['title']);
  }
}