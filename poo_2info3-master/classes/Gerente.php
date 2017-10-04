<?php

require_once "Funcionario.php";
class Gerente extends Funcionario
{
    public $senhaCofre;
    public $numeroFuncionariosGerenciados;

    public function autenrica(int $senha){
        if($this->senhaCofre == $senha){
            echo "acesso permitido";
        }else{
            echo "Acesso negado";
        }
    }

    public function recebeAumento(float $aumento){
        $this->salario += $aumento + 100;
    }

}

//require_once "Data.php";
////Ñ FAZER EM HIPÓTESE NENHUMA ISSO NA VIDA REAL... ABRIR NOVO ARQUIVO
//
//$gerente = new Gerente();
//
//$dataEntrada = new Data();
//$dataEntrada->dia= 02;
//$dataEntrada->mes = 03;
//$dataEntrada->ano = 2014;
//
//$gerente->nome = "Gioconda";
//$gerente->salario = 5000;
//$gerente->setDataEntrada($dataEntrada);
//
//$gerente->recebeAumento(200);
//
//$gerente->mostra();