<?php 

namespace Patterns\AcoesAoGerarPedido;

use Patterns\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Gerando log do pedido " . PHP_EOL;
    }
}