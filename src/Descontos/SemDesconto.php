<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Sample $sample): float
    {
        return 0;
    }
}
