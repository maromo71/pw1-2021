<?php
//Faça um programa com uma função chamada somaImposto. 
//A função possui dois parâmetros formais: taxaImposto, 
//que é a quantia de imposto sobre vendas expressa em 
//porcentagem e custo, que é o custo de um item antes do imposto. 
//A função “altera” o valor de custo para incluir o imposto sobre vendas.

function somaImposto($taxaImposto, $custo){
    $custo = $custo + ($custo * $taxaImposto/100);
    return $custo;  
}

$precoSemImposto = $argv[1];
$taxaDeImpostos = $argv[2];

$resultado = somaImposto($taxaDeImpostos, $precoSemImposto);
echo "Valor somado ao imposto: $resultado \n";
