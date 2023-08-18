<?php

class FoodsAnalysis extends ChemicalAnalysis
{
    protected function collectSample($sample)
    {
        echo "Coletando amostra de Foods: {$sample}\n";
    }

    protected function prepareSampleForAnalysis()
    {
        echo "Preparando amostra de Foods para análise\n";
    }

    protected function performAnalysis()
    {
        echo "Realizando análise química da Foods\n";
    }
}
