<?php
$escolha = $argv[1];
$cardapio = "MENU DE OPÇÕES \n";
$cardapio .= "1.. Coca-cola \n";
$cardapio .= "2.. Fanta \n";
$cardapio .= "3.. Guaraná \n";
$cardapio .= "4.. Cerveja Skol \n";
echo $cardapio;
echo "\n\n";
echo "Escolha do usuário: $escolha \n";
switch($escolha){
    case 1:
        echo "Coca-cola em promoção, pague R$ 4,00 \n";
        break;
    case 2:
        echo "Fanta em promoção, pague R$ 3.80 \n";
        break;
    case 3:
        echo "Guaraná em falta, peça outra coisa \n";
        break;
    case 4:
        echo "Skol e churrasco combinam bem \n";
        break;
    default:
        echo "Opção inválida \n";
}