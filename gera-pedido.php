<?php

require_once 'vendor/autoload.php';

use Patterns\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Patterns\AcoesAoGerarPedido\EnviarPedidoEmail;
use Patterns\AcoesAoGerarPedido\LogGerarPedido;
use Patterns\GerarPedido;
use Patterns\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens  = $argv[2];
$nomeCliente    = $argv[3];

$geraPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->addAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->addAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->addAcaoAoGerarPedido(new EnviarPedidoEmail());
$gerarPedidoHandler->execute($geraPedido);