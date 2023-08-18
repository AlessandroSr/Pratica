
<?php

use Alura\DesignPattern\Lot\Componente;

class Lote implements Componente
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function executar(): string
    {
        return "Lote: {$this->nome}\n";
    }
}
