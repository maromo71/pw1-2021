<?php
//Reverso do número. Faça uma função que retorne o 
//reverso de um número inteiro informado. Por exemplo: 127 -> 721.
//Funções embutidas (funções da própria linguagem)
//Por exemplo, funções que manipulam string
$valor = $argv[1];
$valor = strrev($valor);
echo $valor . "\n";
