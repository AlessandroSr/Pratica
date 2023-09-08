<?php

use Alura\DesignPattern\Analysis;
use Alura\DesignPattern\AnalysisCollections\AnalysisCollection;
use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeTipos;
use Alura\DesignPattern\Pacotes\{Nutricao, Solos};
use Alura\DesignPattern\Pacote;
use Alura\DesignPattern\Reports\CSVReport;
use Alura\DesignPattern\Reports\PDFReport;
use Alura\DesignPattern\Observers\ReportObserver;
use Alura\DesignPattern\Reports\ReportGenerator;
use Alura\DesignPattern\Sample;
use Alura\DesignPattern\Sample\SampleBuilder;
use Alura\DesignPattern\StatesAnalysis;
use Alura\DesignPattern\StatesAnalysis\Approved;
use Alura\DesignPattern\StatesAnalysis\Rejected;

require 'vendor/autoload.php';
require "src/Analises/ChemicalAnalysis.php";
require "src/Analises/FoodsAnalysis.php";
require "src/Analises/SoilAnalysis.php";

// ==================================================================================== \\

$calculadoraTipo = new CalculadoraDeTipos();
$calculadoraDescontos = new CalculadoraDeDescontos();
$waterAnalysis = new FoodsAnalysis();
$soilAnalysis = new SoilAnalysis();
$reportGenerator = new ReportGenerator();

// Criando os relatórios em diferentes formatos
$pdfReport = new PDFReport();
$csvReport = new CSVReport();

// Criando o observador
$reportObserver = new ReportObserver();

// ==================================================================================== \\

echo '' . PHP_EOL;

$sample = new Sample();
$sample->code = "150075";
$sample->descricao = "Descricao";
$sample->valor = 5000;
$sample->quantidadeItens = 20;
$sample->tipo = "Nutricao Sample";
$sample->data = new \DateTimeImmutable();
$sample->analyzeSample(); // Estado Inicial

$sample2 = clone $sample;
echo '' . PHP_EOL;

echo "Calculadora De Valor Tipo Nutricao: " . $calculadoraTipo->calcula($sample, new Nutricao()). PHP_EOL;
echo "Desconto: ".$calculadoraDescontos->calculaDescontos($sample). PHP_EOL;
echo "Novo Valor: ".$sample->valor - $calculadoraDescontos->calculaDescontos($sample). PHP_EOL;

echo '' . PHP_EOL;
// Executando a análise das amostras de água 
$waterAnalysis->analyzeSample($sample->tipo);
echo '' . PHP_EOL;

// Aprovando a amostra
$sample->setState(new Approved());
$sample->approveSample();

// Tentando analisar novamente
$sample->analyzeSample();

// Reprovando a amostra
$sample->setState(new Rejected());
$sample->rejectSample();
echo '' . PHP_EOL;

// ==================================================================================== \\


echo '' . PHP_EOL;

$sample2 = new Sample();
$sample2->code = "150075";
$sample2->descricao = "Descricao";
$sample2->valor = 5000;
$sample2->quantidadeItens = 20;
$sample2->tipo = "Solos Sample";
$sample->data = new \DateTimeImmutable();
$sample2->analyzeSample(); // Estado Inicial

echo '' . PHP_EOL;

echo "Calculadora De Valor Tipo Solos: ". $calculadoraTipo->calcula($sample2, new Solos()). PHP_EOL;
echo "Desconto: " . $calculadoraDescontos->calculaDescontos($sample2). PHP_EOL;
echo "Novo Valor: " . $sample2->valor - $calculadoraDescontos->calculaDescontos($sample2). PHP_EOL;
echo '' . PHP_EOL;
// Executando a análise das amostras de solo
$soilAnalysis->analyzeSample($sample2->tipo);
echo '' . PHP_EOL;

// Aprovando a amostra
$sample2->setState(new Approved());
$sample2->approveSample();

// Tentando analisar novamente
$sample2->analyzeSample();

// Reprovando a amostra
$sample2->setState(new Rejected());
$sample2->rejectSample();
echo '' . PHP_EOL;

// ==================================================================================== \\


// Adicionando os relatórios ao gerador
$reportGenerator->addReport($pdfReport);
$reportGenerator->addReport($csvReport);


// Registrando o observador para ser notificado quando o relatório for gerado
$reportGenerator->addObserver($reportObserver);

// Gerando os relatórios
$reportGenerator->generateReports();

echo '' . PHP_EOL;

// ==================================================================================== \\

echo 'Clone' . PHP_EOL;
var_dump($sample,$sample2);
echo '' . PHP_EOL;

echo 'Uso do padrão Builder' . PHP_EOL;
$sampleBuilder = new SampleBuilder();
$sampleB = $sampleBuilder
    ->setCode('Product A')
    ->setDescription('This is product A')
    ->setValor(19.99)
    ->setQuantidadeItens(5)
    ->build();

echo $sampleB->getInfo();