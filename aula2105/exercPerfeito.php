<?php
$num = $argv[1];
$soma = 0;
for($i=1; $i<=($num / 2);$i++){
    if($num % $i == 0){
        $soma = $soma + $i;  //$soma+=$i
    }
}
if($soma == $num){
    echo "Número perfeito...\n";
}else{
    echo "Esse número não é perfeito...\n";
}