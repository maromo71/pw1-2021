<?php
$num = $argv[1];

if($num == 0){
    echo "Número neutro \n";
}elseif($num > 0){
    echo "Número positivo \n";
}else{
    echo "Número negativo \n";
}