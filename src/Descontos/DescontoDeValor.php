<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;
class DescontoDeValor extends Desconto
{
    private const VALOR_MINIMO_DESCONTO = 1000;
    private const TAXA_DESCONTO = 0.05;

    public function calculaDesconto(Sample $sample): float
    {
        if ($sample->valor > self::VALOR_MINIMO_DESCONTO) {
            return $sample->valor * self::TAXA_DESCONTO;
        }

        return $this->proximoDesconto->calculaDesconto($sample);
    }
}