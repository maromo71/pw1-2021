<?php
$letra = $argv[1];
switch($letra){
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "É uma vogal \n";
        break;
    default:
        echo "É uma consoante \n";
}