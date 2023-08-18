<?php

namespace Alura\DesignPattern\Pacotes;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class Nutricao implements Tipo
{
    public function calculaTipo(Sample $sample): float
    {
        return $sample->valor = $sample->valor * 0.5;
    }
}
