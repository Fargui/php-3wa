<?php

namespace Reporting\Formatters;

use Reporting\Report;

class JSONFormatter {
    /**
     * Retourne le rapport formatté en JSON
     *
     * @return string
     */
    public function formatToJSON(Report $report): string
    {
        return json_encode($report->getContents());
    }
}