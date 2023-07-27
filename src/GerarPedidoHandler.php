<?php

namespace Patterns;

use Patterns\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Patterns\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Patterns\AcoesAoGerarPedido\EnviarPedidoEmail;
use Patterns\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido[] */
    private array $acoesAoGerarPedido = [];

    public function __construct()
    {}

    public function addAcaoAoGerarPedido(AcaoAposGerarPedido $acaoAposGerarPedido)
    {
        $this->acoesAoGerarPedido[] = $acaoAposGerarPedido;
    }
    
    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizado = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAoGerarPedido as $acaoAposGerarPedido) {
            $acaoAposGerarPedido->execute($pedido);
        }

        return $pedido;
    }
}
