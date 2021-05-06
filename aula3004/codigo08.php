<?php
$times = ["São Paulo", "Corinthians", "Santos", "São Caetano", "Palmeiras"];

for($i=0; $i<sizeof($times); $i++){
    echo "$times[$i] \n";
}

//Para simplificar o percorrer listas criou-se o comando for each
foreach($times as $time){
    echo "$time \n";
}