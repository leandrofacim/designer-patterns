<?php 

namespace Patterns;

use Patterns\Descontos\DescontoMaisDeCincoItens;
use Patterns\Descontos\DescontoMaisDeQuientosReais;
use Patterns\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoMaisDeQuientosReais(new SemDesconto())
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}