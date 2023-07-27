<?php

namespace Patterns\AcoesAoGerarPedido;

use Patterns\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Cria pedido no banco de dados " . PHP_EOL;
    }
}
