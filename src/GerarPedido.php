<?php

namespace Patterns;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroItens,
        string $nomeCliente
    ) {
        $this->nomeCliente = $nomeCliente;
        $this->numeroItens = $numeroItens;
        $this->valorOrcamento = $valorOrcamento;
    }

    /**
     * Get the value of valorOrcamento
     */ 
    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }

    /**
     * Get the value of numeroItens
     */ 
    public function getNumeroItens()
    {
        return $this->numeroItens;
    }

    /**
     * Get the value of nomeCliente
     */ 
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
}
