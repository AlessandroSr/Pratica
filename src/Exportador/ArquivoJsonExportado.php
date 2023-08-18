<?php

namespace Alura\DesignPattern\Exportador;

class ArquivoJsonExportado implements ArquivoExportado
{
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $conteudo = json_encode($conteudoExportado->conteudo(), JSON_PRETTY_PRINT);

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'json');
        file_put_contents($caminhoArquivo, $conteudo);

        return $caminhoArquivo;
    }
}
