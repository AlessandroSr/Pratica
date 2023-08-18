<?php

namespace Alura\DesignPattern\Pacotes;

use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Sample;

class Solos implements Tipo
{
    public function calculaTipo(Sample $sample): float
    {
        return $sample->valor;
    }
}
