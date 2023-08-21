<?php

namespace Alura\DesignPattern\Pacotes;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class Nutricao implements Tipo
{
    private const VALOR_TIPO = 0.5;
    
    public function calculaTipo(Sample $sample): float
    {
        return $sample->valor = $sample->valor * self::VALOR_TIPO;
    }
}
