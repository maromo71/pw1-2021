<?php
//variável preco, com valor com casas decimais
$preco = 12.89;

//variável quantidade, com valor inteiro
$quantidade = 10;

//variável descricao do tipo string
$descricao = "Camisa simples branca";

//variável com valor booleano (verdadeiro ou falso)
$emfalta = false;
//Qual será o preco de 10 camisas.
$valorTotal = $quantidade * $preco;

echo "O preco do produto $descricao é de $preco, e $quantidade custa $valorTotal";
