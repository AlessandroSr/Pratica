<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Pacotes\Tipo;
use Alura\DesignPattern\StatesAnalysis\InAnalysis;
use Alura\DesignPattern\StatesAnalysis\SampleState;
use ChemicalAnalysis;

class Sample
{
    public $code;
    public $descricao;
    public $state;
    public $valor;
    public $quantidadeItens;
    public $tipo;

    public function __construct()
    {
        $this->state = new InAnalysis();
    }

    public function setState(SampleState $state)
    {
        $this->state = $state;
    }

    public function setTipo(ChemicalAnalysis $tipo)
    {
        $this->tipo = $tipo;
    }

    public function analyzeSample()
    {
        $this->state->analyze();
    }

    public function approveSample()
    {
        $this->state->approve();
    }

    public function rejectSample()
    {
        $this->state->reject();
    }
}
