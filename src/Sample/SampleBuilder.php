<?php

namespace Alura\DesignPattern\Sample;

use Alura\DesignPattern\Sample;
use ChemicalAnalysis;

class SampleBuilder
{
    private $sample;

    public function __construct()
    {
        $this->sample = new Sample();
    }

    public function setCode($code)
    {
        $this->sample->setCode($code);
        return $this;
    }

    public function setDescription($description)
    {
        $this->sample->setDescription($description);
        return $this;
    }

    public function setValor($valor)
    {
        $this->sample->setValor($valor);
        return $this;
    }

    public function setQuantidadeItens($quantidadeItens)
    {
        $this->sample->setQuantidadeItens($quantidadeItens);
        return $this;
    }

    public function build()
    {
        return $this->sample;
    }
}
