<?php

//Tabuado do número informado pelo usuário
$num = $argv[1];

echo "Tabuado do número $num \n";

for($i = 1; $i <=10; $i++){
    $resultado = $num * $i;
    echo "$num  X  $i  =   $resultado \n";
}