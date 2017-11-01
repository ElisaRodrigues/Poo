<?php
// 7)a)
class Carro{

    public $modelo;
    public $cor;
    public $velocidadeAtual = 0;
    public $velocidadeMaxima;

    public function liga(){
        echo "o carro foi ligado";
    }

    public function acelera(float $velocidade){
        if (($this->velocidadeAtual + $velocidade) <= $this->velocidadeMaxima){
            $this->velocidadeAtual += $velocidade;
        }
    }

    public function pegaMarcha():int{
        if($this->velocidadeAtual <=40){
            return 1;
        } elseif ($this->velocidadeAtual <= 60){
            return 2;
        } else {
            return 3;
        }
    }

}
// 7)b)
$fusca = new Carro;
$fusca->modelo = "fusca";
$fusca->cor = "verde";
$fusca->velocidadeMaxima = 80;

$ferrari = new Carro;
$ferrari->modelo = "ferrari";
$ferrari->cor = "vermelha";
$ferrari->velocidadeMaxima = 300;



// 7)c)
$fusca->liga();
$fusca->acelera(10);
echo $fusca->velocidadeAtual;
echo $fusca->pegaMarcha();