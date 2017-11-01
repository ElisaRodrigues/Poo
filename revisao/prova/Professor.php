<?php
// 7)b)
require_once "Pessoa.php";

class Professor extends Pessoa
{
    public $disciplinasMinistradas;


    public function fazerCopias(int $q){
        if($this->totalCopias+ $q <= 500){
            $this->totalCopias += $q;
        }
    }
}

//7)c)

$gioconda = new Professor("Gioconda", "49346536058726475");
$gioconda->fazerCopias(78);
$gioconda->fazerCopias(43);

echo $gioconda->totalCopias;
