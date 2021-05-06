<?php

//Programa que mostra os pares que estão entre 1 e 100
//Resto da divisão por 2
//Dividi por 2 e o resto for zero, é par
for($i = 1; $i <=100; $i++){
    if($i % 2 == 0){
        echo "$i ";
    }
}
echo "\n";