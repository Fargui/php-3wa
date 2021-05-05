<?php

namespace Reporting\Format;


class CsvFormatter implements FormatterInterface
{

    public function format(\Reporting\Report $report): string
    {
        // La fameuse méthode publique getContents() qui nous donne les infos qu'on veut 
        // sous la forme d'un tableau associatif (avec les clés title et date)
        $content = $report->getContents();

        // On peut maintenant formater !
        $title = $content['title'];
        $date = $content['date'];

        return "\"$title\", $date";
    }
}