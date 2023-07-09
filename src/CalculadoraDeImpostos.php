<?php

namespace Patterns;

use Patterns\Impostos\Imposto;
use Patterns\Orcamento;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}