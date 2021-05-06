<?php
//Programa que imprimi um tabuleiro tipo jogo da velha
$velha[0][2] = "X";
$velha[1][0] = "0";
$velha[1][1] = "0";
$velha[2][2] = "X";

//Imprimir a matriz 
for($i = 0; $i < 3; $i++){ //passar pelas três linhas
    for($j = 0; $j < 3; $j++) { //passar pelas colunas
        if(isset($velha[$i][$j])){
            echo "[ {$velha[$i][$j]} ] ";
        }else{
            echo "[   ] ";
        }
    }
    echo "\n";
}