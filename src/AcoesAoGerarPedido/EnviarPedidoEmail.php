<?php 

namespace Patterns\AcoesAoGerarPedido;

use Patterns\Pedido;

class EnviarPedidoEmail implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Envia e-email para cliente " . PHP_EOL;
    }
}