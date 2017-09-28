<?php

require_once "classes/conta.php";
require_once "classes/cliente.php";

$cliente = new cliente();
$cliente->nome = "vicotr";
$cliente->cpf = "024198415154";

$minhaConta = new conta();

$minhaConta->setDono($cliente);
$minhaConta->deposita(2000);

        echo $minhaConta -> getDono() -> nome;


