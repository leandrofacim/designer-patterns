<?php

require_once 'vendor/autoload.php';

use Patterns\GerarPedido;

$valorOrcamento = $argv[1];
$numeroDeItens  = $argv[2];
$nomeCliente    = $argv[3];

$geraPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$resultado = $geraPedido->execute();
echo json_encode($resultado);