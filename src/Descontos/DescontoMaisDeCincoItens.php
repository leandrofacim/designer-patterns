<?php

namespace Patterns\Descontos;

use Patterns\Orcamento;

class DescontoMaisDeCincoItens extends Descontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}