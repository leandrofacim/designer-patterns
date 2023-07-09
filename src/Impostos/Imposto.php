<?php

namespace Patterns\Impostos;

use Patterns\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}