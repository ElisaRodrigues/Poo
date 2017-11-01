<?php
class Caneta
{
    public $modelo;
    public $cor;
    protected $carga = 1;
    public $tampada;

    public function escrever(string $texto){
        if ($this->carga>0){
            echo "texto";
            $this->carga -= 0.1;
        } else{
            echo "acabou tinta";
        }
    }

    public function tampar(){

    }

    public function destampar(){

    }
}