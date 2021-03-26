<?php
echo "O programa verifica se o usuário atingiu a meta de vendas \n";
echo "Caso tenha atingido esta meta, ganha 10 % de aumento \n";
echo "Se não, ganha 5% de aumento \n\n";
$atingiuMeta = $argv[1];
$salario = $argv[2];

$atingiuMeta = $atingiuMeta == "true" ? true : false;


$novoSalario = $atingiuMeta ? $salario * 1.10 : $salario * 1.05;

echo "Seu novo salário é: $novoSalario \n";
