<?php

namespace Alura\DesignPattern\Observers;

use Alura\DesignPattern\Observers\Observer;

class ReportObserver implements Observer
{
    public function reportGenerated()
    {
        echo "Relatório gerado.\n";
    }
}
