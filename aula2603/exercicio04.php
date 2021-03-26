<?php
//Verificar se uma letra é consoante ou vogal
$letra = $argv[1];

if($letra=='a' || 
    $letra=='e' || 
    $letra=='i' || 
    $letra=='o' || 
    $letra=='u' ||
    $letra =='A' || 
    $letra=='E' || 
    $letra=='I' || 
    $letra=='O' || 
    $letra=='U'){
    echo "É uma vogal \n";
}else{
    echo "É uma consoante \n";
}
