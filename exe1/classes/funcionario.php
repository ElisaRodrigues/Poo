<?php

class funcionario
{
    private $nome;
    public $departamento;
    public $salario = 0;
    public $dataEntrada;
    public $cpf;
    const SALARIO_ANUAL_E_DECIMO = 13;
    const FERIAS = 0.3;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    //método
    public function recebeAumento(float $aumento) {

        $this->salario += $aumento;

    }
    public function calculaGanhoAnual():float {

        return ($this->salario * SALARIO_ANUAL_E_DECIMO) + $this->salario * FERIAS;

    }
    public function mostra(){
        //TODO fazer o método mostra como pede o exercício
    }
}
