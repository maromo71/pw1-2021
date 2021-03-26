<?php
/* Dar o para usário a opção entre solteiro (s), 
   casado (c), ou viúvo (v), ou (o) outros */
$estCivil = $argv[1];
$opcoes = "Opções de Estado Civil \n";
$opcoes .= "(c) para casado \n";
$opcoes .= "(s) para solteiro \n";
$opcoes .= "(v) para viúvo \n";
$opcoes .= "(o) para outros \n";

switch($estCivil){
    case 'C':
    case 'c':
        echo "Casado, tá enrolado \n";
        break;
    case 'S':
    case 's':
        echo "Solteiro, tem balada, mas tem covid \n";
        break;
    case 'V':
    case 'v':
        echo "Viúvo, pegue carteira de vacinação \n";
        break;
    default:
        echo "Outros... O que será hein!! \n";
}
