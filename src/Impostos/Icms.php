<?php

namespace Patterns\Impostos;

use Patterns\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.01;
    }
}