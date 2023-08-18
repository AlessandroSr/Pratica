<?php

namespace Alura\DesignPattern\Reports;

use Alura\DesignPattern\Reports\Report;

class CSVReport implements Report
{
    public function generate()
    {
        echo "Gerando relatório em CSV...\n";
    }
}

