<?php

namespace Alura\DesignPattern\StatesAnalysis;

use Alura\DesignPattern\StatesAnalysis\SampleState;

class InAnalysis implements SampleState
{
    public function analyze()
    {
        return print_r("A amostra está em análise.\n");
    }

    public function approve()
    {
        return print_r("A amostra não pode ser aprovada enquanto estiver em análise.\n");
    }

    public function reject()
    {
        return print_r("A amostra não pode ser reprovada enquanto estiver em análise.\n");
    }
}