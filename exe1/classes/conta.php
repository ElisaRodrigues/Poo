<?php


class conta
{
    public $numero;
    private $saldo = 0;
    public $dono;
    public $senha;


    public function getDono()
    {
        return $this->dono;
    }

    public function setDono(cliente $dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }


    public function sacar(float $valor):bool{
        if($valor <= $this->saldo){
            $this->saldo -= $valor;
            return true;
        }else{
            return false;
        }
    }

    public function deposita(float $valor){
        $this->saldo += $valor;
    }

    public function transferePara(conta $contaDestino, $valor){
        $deuCerto = $this->sacar($valor);

        if($deuCerto){
         $contaDestino->deposita($valor);

        }
    }
}
