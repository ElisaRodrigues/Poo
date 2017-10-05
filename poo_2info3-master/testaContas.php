<?php
require_once "classes/Conta.php";

require_once "classes/ContaCorrente.php";
require_once "classes/ContaPoupança.php";


$contaPoupanca = new ContaPoupança();
$contaPoupanca->atualizaSaldo(500);

$contaCorrente = new ContaCorrente();
$contaCorrente->atualizaSaldo(90);

echo $contaCorrente->atualizaSaldo(90);
