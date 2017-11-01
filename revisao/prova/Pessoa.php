<?php
// 8)a)
class Pessoa
{
    public $nome;
    public $cpf;
    public $totalCopias =0;

    public function __construct($nome, $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function fazerCopias(int $q){
        if($this->totalCopias+ $q <= 100){
            $this->totalCopias += $q;
        }
    }
}