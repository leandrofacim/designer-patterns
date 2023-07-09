<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Patterns\CalculadoraDeDescontos;
use Patterns\Orcamento;
use Patterns\Impostos\Iss;
use Patterns\CalculadoraDeImpostos;
use Patterns\Impostos\Icms;

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// $issInstance = new Iss();
// $icmsInstance = new Icms();

// $icms = $calculadora->calcula($orcamento, $icmsInstance) . PHP_EOL;
// $iss = $calculadora->calcula($orcamento, $issInstance) . PHP_EOL;

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 2;

$calculadora = new CalculadoraDeDescontos();
$totalDesconto = $calculadora->calculaDescontos($orcamento);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer Pattern</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h1><? echo $totalDesconto ?></h1>
</body>

</html>