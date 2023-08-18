<?php

namespace Alura\DesignPattern\Exportador;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}