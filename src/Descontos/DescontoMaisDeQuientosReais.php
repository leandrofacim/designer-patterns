<?php

namespace Patterns\Descontos;

use Patterns\Orcamento;

class DescontoMaisDeQuientosReais extends Descontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}