<?php

require_once "Conta.php";
class ContaPoupança extends Conta
{
    public function atualizaSaldo(float $taxa){
        $percentual = ($taxa*3) / 100;
        $this->saldo += $this->saldo*$percentual;
    }
}