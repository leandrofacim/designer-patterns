<?php 

namespace Patterns\Descontos;

use Patterns\Orcamento;

class SemDesconto extends Descontos
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}