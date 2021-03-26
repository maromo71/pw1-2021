<?php
//Verifica o sexo passo pela linha de comando
//'M' ou 'm' -> masculino
//'F' ou 'f' -> feminino
$sexo = $argv[1];

switch($sexo){
    case 'F':
    case 'f':
        echo "Sexo feminino\n";
        break;
    case 'M':
    case 'm':
        echo "Sexo Masculino\n";
        break;
    default:
        echo "Sexo inválido\n";
}