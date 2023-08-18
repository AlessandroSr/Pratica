<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Sample $sample): float;
}
