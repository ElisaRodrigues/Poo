<?php

class Pessoa
{
    public $nome;
    public $idade;


    public function fazAniversario(){
        $this->idade++;
    }

    public function mostra(){
        echo "A pessoa {$this->nome} terá daqui a pouco {$this->idade} anos de idade\n\n";
    }

}

$gioconda = new Pessoa;
$gioconda->nome = "Gioconda";
$gioconda->idade = "18";

$gioconda->fazAniversario();

$gioconda->mostra();

//--------------------------------------

$kauana = new Pessoa;
$kauana->nome = "Kauana";
$kauana->idade = "17";

$kauana->fazAniversario();

$kauana->mostra();