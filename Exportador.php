<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Sample};
use Alura\DesignPattern\Exportador\{ArquivoXmlExportado, ArquivoJsonExportado, SampleExportado, SampleExportadoTodo};

$sample = new Sample();
$sample->code = "150075";
$sample->descricao = "Descricao";
$sample->valor = 5000;
$sample->quantidadeItens = 20;
$sample->tipo = "Nutricao Sample";

$sampleExportado = new SampleExportado($sample);
$sampleExportadoTodo = new SampleExportadoTodo($sample);

$sampleExportadoXml = new ArquivoXmlExportado('sample');
$sampleExportadoJson = new ArquivoJsonExportado('sample');

echo $sampleExportadoXml->salvar($sampleExportado);
echo '' . PHP_EOL;
echo $sampleExportadoJson->salvar($sampleExportado);
echo '' . PHP_EOL;
echo $sampleExportadoXml->salvar($sampleExportadoTodo);
echo '' . PHP_EOL;
echo $sampleExportadoJson->salvar($sampleExportadoTodo);
