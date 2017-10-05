<?php

require_once "Conta.php";
class ContaCorrente extends Conta
{
    public function atualizaSaldo(float $taxa){
        $percentual = ($taxa*2) / 100;
        $this->saldo += $this->saldo*$percentual;
    }
}