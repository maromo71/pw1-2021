<?php
$valor = 500;

function exibeDados($_valor){
    $_valor = $_valor+ 100;
    echo $_valor . "\n";   
}

exibeDados($valor);
echo $valor;
