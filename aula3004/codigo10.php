<?php
//Fazer uma contagem dos múltiplos de 03 mostrando cada um
//que estão na faixa de 1 a 100. Mas deve encerrar o programa
//ao encontrar o 10 múltiplo de 3.
$contador = 0;
for($i = 1; $i <= 100; $i++){
    if($i % 3 ==0){
        echo "Multiplo de 3 => $i \n";
        $contador++;
    }
    if ($contador == 10){
        break;
    }
}
echo "Terminei, mostrei os 10 primeiros múltiplos de \n";
echo "3 que estão na faixa desejada\n";
