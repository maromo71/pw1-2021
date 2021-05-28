<?php
/*
série dos 12 primeiros termos de Fibonacci
1 1
*/
$atual = 1;
echo $atual . " ";
$anterior = 1;
echo $anterior . " ";
for($i=3; $i<=20; $i++){
    $prox = $atual + $anterior;
    echo $prox . " ";
    $anterior = $atual;
    $atual = $prox;
}
echo "\n";
