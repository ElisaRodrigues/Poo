<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 19/10/17
 * Time: 13:09
 */
require_once "Caneta.php";
class MiniCaneta extends Caneta{

    function __construct()
    {
        $this->carga = 0.5;
    }
}

$mini = new MiniCaneta();
var_dump($mini);