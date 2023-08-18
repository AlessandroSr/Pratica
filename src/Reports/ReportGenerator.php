<?php

namespace Alura\DesignPattern\Reports;

use Alura\DesignPattern\Observers\Observer;
use Alura\DesignPattern\Observers\Subject;

class ReportGenerator implements Subject
{
    private $reports = [];
    private $observers = [];

    public function addReport(Report $report)
    {
        $this->reports[] = $report;
    }

    public function generateReports()
    {
        foreach ($this->reports as $report) {
            $report->generate();
        }

        // Notificar os observadores após a geração dos relatórios
        $this->notifyObservers();
    }

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->reportGenerated();
        }
    }
}
