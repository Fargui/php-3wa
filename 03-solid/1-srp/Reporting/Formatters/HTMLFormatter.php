<?php

namespace Reporting\Formatters;

class HTMLFormatter {
    /**
   * Retourne le rapport formatté en HTML
   *
   * @return string
   */
    public function formatToHTML(): string
    {
        return "<h2>$this->title</h2><em>$this->date</em>";
    }

}