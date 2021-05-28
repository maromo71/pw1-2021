<?php
//Faça um programa, com uma função que necessite de três argumentos, 
//e que forneça a soma desses três argumentos.

function somar3Valores($v1, $v2, $v3){
    return $v1 + $v2 + $v3;
}

$num1 = $argv[1];
$num2 = $argv[2];
$num3 = $argv[3];
echo somar3Valores($num1, $num2, $num3) . "\n";



