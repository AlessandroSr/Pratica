<?php

namespace Alura\DesignPattern\StatesAnalysis;

use Alura\DesignPattern\StatesAnalysis\SampleState;

class Rejected implements SampleState
{
    public function analyze()
    {
        return print_r("A amostra já foi reprovada, não é possível analisá-la novamente.\n");
    }

    public function approve()
    {
        return print_r("A amostra não pode ser aprovada após ter sido reprovada.\n");
    }

    public function reject()
    {
        return print_r("A amostra foi reprovada.\n");
    }
}
