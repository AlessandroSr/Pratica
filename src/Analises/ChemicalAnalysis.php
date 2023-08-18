<?php

abstract class ChemicalAnalysis
{
    // Método Template que define o fluxo geral da análise
    public function analyzeSample($sample)
    {
        $this->collectSample($sample);
        $this->prepareSampleForAnalysis();
        $this->performAnalysis();
        $this->generateReport();
    }

    // Método abstrato para coletar a amostra específica
    abstract protected function collectSample($sample);

    // Método abstrato para preparar a amostra para análise específica
    abstract protected function prepareSampleForAnalysis();

    // Método abstrato para realizar a análise específica
    abstract protected function performAnalysis();

    // Método comum para gerar relatório
    protected function generateReport()
    {
        echo "Relatório da análise\n";
    }
}
