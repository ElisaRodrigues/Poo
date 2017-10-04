<?php

require_once "classes/Conta.php";
require_once "classes/Cliente.php";


//Objeto cliente
$cliente = new Cliente();
$cliente->nome = "Jefferson";
$cliente->cpf  = "076455870";

$minhaConta = new Conta();

$minhaConta->setDono($cliente);
$minhaConta->deposita(2000);


$outraConta = new Conta();


//echo $minhaConta->getDono()->nome;

echo Conta::getTotalContas();