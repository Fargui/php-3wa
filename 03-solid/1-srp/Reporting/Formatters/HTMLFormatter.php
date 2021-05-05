<?php

namespace Reporting\Formatters;

use Reporting\Report;

class HTMLFormatter {
    /**
   * Retourne le rapport formatté en HTML
   *
   * @return string
   */
    public function formatToHTML(Report $report): string
    {
        $reportData = $report->getContents();
        return "<h2>".$reportData["title"]."</h2><em>".$reportData["date"]."</em>";
    }

}