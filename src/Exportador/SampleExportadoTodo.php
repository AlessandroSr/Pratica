<?php

namespace Alura\DesignPattern\Exportador;

use Alura\DesignPattern\Sample;

class SampleExportadoTodo implements ConteudoExportado
{
    private Sample $sample;

    public function __construct(Sample $sample)
    {
        $this->sample = $sample;
    }

    public function conteudo(): array
    {
        return [
            'Code' => $this->sample->code,
            'Valor' => $this->sample->valor,
            'Descricao' => $this->sample->descricao,
            'Quantidade_Itens' => $this->sample->quantidadeItens,
            'tipo' => $this->sample->tipo
        ];
    }
}
