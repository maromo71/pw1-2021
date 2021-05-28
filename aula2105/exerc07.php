<?php
/*
Desenvolva um script  em  php  que leia  um  valor  inteiro  N.  
Apresente  o quadrado  de  cada  um  dos  valores  pares,  
de  1  até  N,  inclusive  N,  se  for  o caso.
*/
$n = $argv[1];
for($i=2; $i<=$n; $i+=2){
    $res = $i * $i;
    echo "$i^2 = $res\n";
}