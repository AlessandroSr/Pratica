<?php

require 'vendor/autoload.php';

require_once 'src\Lot\Componente.php';
require_once 'src\Lot\Lote.php';
require_once 'src\Lot\Lotes.php';


$Lote_1 = new Lotes("Lote 1");
$Lote_1->add(new Lote("Iten 1"));

$Lote_2 = new Lotes("Lote 678");
$Lote_2->add(new Lote("Iten 6"));
$Lote_2->add(new Lote("Iten 7"));
$Lote_2->add(new Lote("Iten 8"));

$Lote_1->add($Lote_2);

echo $Lote_1->executar();
