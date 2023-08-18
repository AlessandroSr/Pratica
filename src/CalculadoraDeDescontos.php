<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\DescontoDeValor;
use Alura\DesignPattern\Descontos\DescontoDeItens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Sample $sample): float
    {
        $cadeiaDeDescontos = new DescontoDeItens(
            new DescontoDeValor(
                new SemDesconto()
            )
        );

        $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($sample);

        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);
        echo "".PHP_EOL;

        return $descontoCalculado;
    }
}
