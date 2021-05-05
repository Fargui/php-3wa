<?php

namespace Reporting\Format;

interface DeserializeInterface {
  public function deserialize(string $input): \Reporting\Report;
}