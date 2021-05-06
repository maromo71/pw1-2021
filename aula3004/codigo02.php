<?php
$valor = $argv[1];

//Dependa da condição
//Faça o bloco.. Enquanto verdade (pergunta no final)
do {
    echo "Valor atual: $valor \n";
    $valor += 20;
}while($valor <= 100);
echo "Fui embora \n";