<?php

namespace Patterns;

use DateTimeInterface;

class Pedido
{
    public string $nomeCliente;
    public DateTimeInterface $dataFinalizado;
    public Orcamento $orcamento;
}

