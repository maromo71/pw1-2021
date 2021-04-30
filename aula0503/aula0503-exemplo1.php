<?php
$valor = 500;

function exibeDados(){
    global $valor; //não é recomendável
    $valor = $valor + 100;
    echo $valor;    
}

exibeDados();
echo "\n";