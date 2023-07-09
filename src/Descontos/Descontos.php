<?php

namespace Patterns\Descontos;

use Patterns\Orcamento;

abstract class Descontos
{
    protected ?Descontos $proximoDesconto;

    public function __construct(?Descontos $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}