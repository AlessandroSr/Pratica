<?php

namespace Alura\DesignPattern\Reports;

use Alura\DesignPattern\Reports\Report;

class PDFReport implements Report
{
    public function generate()
    {
        echo "Gerando relatório em PDF...\n";
    }
}