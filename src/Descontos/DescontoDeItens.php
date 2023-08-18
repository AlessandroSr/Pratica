<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class DescontoDeItens extends Desconto
{
    public function calculaDesconto(Sample $sample): float
    {
        if ($sample->quantidadeItens > 5) {
            return $sample->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($sample);
    }
}
