<?php

namespace Patterns\EstadoOrcamento;

use Patterns\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @throws \DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    /**
     * @throws \DomainException
     */
    public function aprova(Orcamento $orcamento): void
    {
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }

    /**
     * @throws \DomainException
     */
    public function reprova(Orcamento $orcamento): void
    {
        throw new \DomainException('Este orçamento não pode ser reprovado');
    }

    /**
     * @throws \DomainException
     */
    public function finaliza(Orcamento $orcamento): void
    {
        throw new \DomainException('Este orçamento não pode ser finalizado');
    }
}