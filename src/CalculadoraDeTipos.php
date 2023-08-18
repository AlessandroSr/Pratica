<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Pacotes\Tipo;

class CalculadoraDeTipos
{
    public function calcula(Sample $sample, Tipo $tipo): float
    {
        return $tipo->calculaTipo($sample);
    }
}
