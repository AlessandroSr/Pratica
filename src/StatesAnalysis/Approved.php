<?php

namespace Alura\DesignPattern\StatesAnalysis;

use Alura\DesignPattern\StatesAnalysis\SampleState;

class Approved implements SampleState
{
    public function analyze()
    {
        return print_r("A amostra já foi aprovada, não é possível analisá-la novamente.\n");
    }

    public function approve()
    {
        return print_r("A amostra foi aprovada.\n");
    }

    public function reject()
    {
        return print_r("A amostra não pode ser reprovada após ter sido aprovada.\n");
    }
}