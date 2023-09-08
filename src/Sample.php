<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Pacotes\Tipo;
use Alura\DesignPattern\StatesAnalysis\InAnalysis;
use Alura\DesignPattern\StatesAnalysis\SampleState;
use ChemicalAnalysis;

class Sample
{
    public $code;
    public $descricao;
    public $state;
    public $valor;
    public $quantidadeItens;
    public $tipo;
    public \DateTimeInterface $data;

    public function __construct()
    {
        $this->state = new InAnalysis();
        $this->data = new \DateTimeImmutable();
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setDescription($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setQuantidadeItens($quantidadeItens)
    {
        $this->quantidadeItens = $quantidadeItens;
    }

    public function setState(SampleState $state)
    {
        $this->state = $state;
    }

    public function setTipo(ChemicalAnalysis $tipo)
    {
        $this->tipo = $tipo;
    }

    public function analyzeSample()
    {
        $this->state->analyze();
    }

    public function approveSample()
    {
        $this->state->approve();
    }

    public function rejectSample()
    {
        $this->state->reject();
    }

    public function getInfo()
    {
        $info  = "Name: {$this->code}\n";
        $info .= "Description: {$this->descricao}\n";
        $info .= "valor: {$this->valor}\n";
        $info .= "quantidadeItens: {$this->quantidadeItens}\n";

        return $info;
    }

    public function __clone()
    {
        $this->data = new \DateTimeImmutable();
    }
}
