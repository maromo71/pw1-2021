<?php
$valor = $argv[1];

//Dependa da condição
//Enquanto verdade faça
while($valor <= 100){
    echo "Valor atual: $valor \n";
    $valor += 20;
}
echo "Fui embora \n";