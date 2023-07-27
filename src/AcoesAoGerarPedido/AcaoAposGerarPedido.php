<?php

namespace Patterns\AcoesAoGerarPedido;

use Patterns\Pedido;

interface AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void;
}