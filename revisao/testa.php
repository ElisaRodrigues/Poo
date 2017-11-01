<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 19/10/17
 * Time: 13:06
 */

require_once "Caneta.php";
$can = new Caneta();
$can->modelo = "bic";
$can->cor = "rosinha <3";
print_r($can);