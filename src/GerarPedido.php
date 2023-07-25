<?php

namespace Patterns;

use DateTimeImmutable;

class GerarPedido implements Command
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroItens,
        string $nomeCliente
    ) {
        $this->nomeCliente = $nomeCliente;
        $this->numeroItens = $numeroItens;
        $this->valorOrcamento = $valorOrcamento;
    }

    public function execute()
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor =$this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizado = new DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados " . PHP_EOL;
        echo "Envia e-email para cliente " . PHP_EOL;

        return $pedido;
    }
}
