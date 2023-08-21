<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class DescontoDeItens extends Desconto
{
    private const ITENS_MINIMO_DESCONTO = 5;
    private const TAXA_DESCONTO = 0.01;

    public function calculaDesconto(Sample $sample): float
    {
        if ($sample->quantidadeItens > self::ITENS_MINIMO_DESCONTO) {
            return $sample->valor * self::TAXA_DESCONTO;
        }

        return $this->proximoDesconto->calculaDesconto($sample);
    }
}
