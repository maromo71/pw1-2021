<?php
//Calcular a area do quadrado
function calcularAreaQuadrado($l1, $l2){
    return $l1  *  $l2;
}


$lado1 = $argv[1];
$lado2 = $argv[2];

$area = calcularAreaQuadrado($lado1, $lado2); //chamada da função

echo "A área da figura é: $area \n";