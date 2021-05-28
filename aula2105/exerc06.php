<?php
/*
Construa um script em php que leia um valor inteiro X. 
Em seguida mostre os ímpares de 1 até X, um valor por linha, 
inclusive o X, se for o caso.
*/
$x = $argv[1];
for($i=1; $i <= $x; $i+=2){
    echo "$i \n";
}
