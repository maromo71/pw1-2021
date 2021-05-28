<?php
/*
Escreva um script em php que pegue o número ao usuário 
na chamada do programa, e mostre sua tabuada (de 1 até 10)
*/
$num = $argv[1];
for($i = 1; $i <=10; $i++){
    $res = $num * $i;
    echo " $num X $i = $res \n";
}