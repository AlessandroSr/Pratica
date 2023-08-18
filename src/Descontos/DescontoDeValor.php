<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class DescontoDeValor extends Desconto
{
    public function calculaDesconto(Sample $sample): float
    {
        if ($sample->valor > 1000) {
            return $sample->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($sample);
    }
}
