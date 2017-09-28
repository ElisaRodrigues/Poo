<?php

class Lutador
{
    public $nome;
    public $idade;
    public $invergadura;
    private $peso;
    private $categoria;
    private $vitorias;
    private$derrotas;

    function __construct($nome, $peso, $vitorias, $derrotas){
        //vai ser executado sozinho quando dermos o comando new
        $this->nome = $nome;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;

        $this->setCategoria();
    }

    public function setPeso(float $novoPeso){
        $this->peso = $novoPeso;
        $this->setCategoria();
    }

    public function getPeso(){
        return $this->peso;
    }

    public function ganhaLuta(){
        $this->vitorias++;
    }
    public function perdeLuta(){
        $this->derrotas++;
    }
    public function apresenta(){
        echo "Senhoras e Senhores, com {$this->vitorias} vitorias e {$this->derrotas} derrotas pesando {$this->peso} kilos, na categoria {$this->categoria}... {$this->nome} \n\n";
    }

    private function setCategoria(){
        if($this->peso <= 50){
            $this->categoria = "frozinha";
        } elseif ($this->peso <= 70){
            $this->categoria = "gatinha";
        } else{
            $this->categoria = "snorlax";
        }
    }
}
//----------X--------------X------------------X--------------X------------------X

$kauana = new Lutador("Kauana", 59.9, 20, 10);

$kauana->ganhaLuta();
$kauana->perdeLuta();

$kauana->apresenta();