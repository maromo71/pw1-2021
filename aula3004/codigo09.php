<?php
$matriz = [
    ["codigo"=>17, "professor"=>"Rodrigo", "turno"=>"tarde"],
    ["codigo"=>18, "professor"=>"Maromo", "turno"=>"manhã"]
];

foreach($matriz as $linha){
    foreach ($linha as $key => $value) {
        echo " $key = $value \n"; 
    }
    echo "\n";
}