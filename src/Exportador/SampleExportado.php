<?php

namespace Alura\DesignPattern\Exportador;

use Alura\DesignPattern\Sample;

class SampleExportado implements ConteudoExportado
{
    private Sample $sample;

    public function __construct(Sample $sample)
    {
        $this->sample = $sample;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->sample->valor,
            'descricao' => $this->sample->descricao
        ];
    }
}
