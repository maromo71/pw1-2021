<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y", time());
$hora = date("h:i", time());
echo "Hoje é: $data \n";
echo "Agora são: $hora \n";