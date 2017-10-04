<?php

class ControleBonificacao
{
    private $totalBonificacoes = 0;

    public function registra(Funcionario $funcionario){
        $this->totalBonificacoes += $funcionario->getBonificaco();
    }

    public function getTotalBonificacoes(): int
    {
        return $this->totalBonificacoes;
    }
}

require_once "Funcionario.php";
require_once "Gerente.php";

$func = new funcionario();
$func->setBonificacao(200);

$ger = new Gerente;
$ger->setBonificacao(1000);

$controle = new ControleBonificacao();
$controle->registra($func);
$controle->