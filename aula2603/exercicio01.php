<?php
$num1 = $argv[1];
$num2 = $argv[2];

if($num1 > $num2){
    $maior = $num1;
}elseif( $num1 == $num2){
    echo "São iguais \n";
    return;
}else{
    $maior = $num2;
}
echo "O maior valor é: $maior \n";
