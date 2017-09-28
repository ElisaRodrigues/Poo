<?php

class Porta
{
    public $aberta;
    public $cor;
    public $dimensaoX, $dimensaoY, $dimensaoZ;

    public function abre(){
        $this->aberta = true;
    }

    public function fecha(){
        $this->aberta = false;
    }

    public function pinta(string $corPintura){
        $this->cor = $corPintura;
    }

    public function estaAberta(){
        return $this->aberta; //estado da porta
    }

    public function mostra(){

    }

}

$portaA11 = new Porta();
$portaA11->aberta = false;
$portaA11->dimensaoX = 2.20;
$portaA11->dimensaoY = 3.40;
$portaA11->dimensaoZ = 0.60;

$portaA11->pinta = "rosinha";
$portaA11->abre();

echo "A porta é da cor {$portaA11->pinta} e está {} ";

if ($portaA11 ==true){
   echo "aberta";
}else{
    echo "fechada";
}