<?php
//Mostrar todos os números entre 1 e 100 que não são múltiplos
//de 3
for($i = 1; $i <= 100; $i++){
    if($i % 3 ==0){
        echo "PIN ";
        continue;
    }
    echo "$i ";
}
echo "\n";
echo "Terminei, mostrei os 10 primeiros múltiplos de \n";
echo "3 que estão na faixa desejada\n";
