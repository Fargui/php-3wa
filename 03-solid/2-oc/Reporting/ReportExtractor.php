<?php

namespace Reporting;

use Reporting\Format\FormatterInterface;

class ReportExtractor
{
    /**
     * Le tableau qui contiendra les différents formatters
     *
     * @var array
     */
    protected $formatters = [];

    /**
     * Permet d'ajouter un formateur JSON au tableau
     *
     * @param FormatterInterface $formatter un formateur de rapport
     *
     * @return void
     */
    public function addFormatter(FormatterInterface $formatter): void
    {
        $this->formatters[] = $formatter;
    }

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return void
     */
    public function process(Report $report): void
    {
        // Pour chaque formatter dans le tableau
        foreach ($this->formatters as $formatter) {
            echo $formatter->format($report);
            echo "<hr/>";
        }
    }
}