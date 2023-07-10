<?php

namespace Patterns\EstadoOrcamento;

use Patterns\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos finalizados não podem receber desconto extra');
    }
}