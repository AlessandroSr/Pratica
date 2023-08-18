<?php

class SoilAnalysis extends ChemicalAnalysis
{
    protected function collectSample($sample)
    {
        echo "Coletando amostra de solo: {$sample}\n";
    }

    protected function prepareSampleForAnalysis()
    {
        echo "Preparando amostra de solo para análise\n";
    }

    protected function performAnalysis()
    {
        echo "Realizando análise química do solo\n";
    }
}
