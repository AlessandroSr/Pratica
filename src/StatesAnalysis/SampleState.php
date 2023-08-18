<?php

namespace Alura\DesignPattern\StatesAnalysis;

interface SampleState
{
    public function analyze();
    public function approve();
    public function reject();
}
