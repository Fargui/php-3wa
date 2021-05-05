<?php

namespace Reporting\Formatters;

class JSONFormatter {
    /**
     * Retourne le rapport formatté en JSON
     *
     * @return string
     */
    public function formatToJSON(): string
    {
        return json_encode($this->getContents());
    }
}