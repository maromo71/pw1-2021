<?php
//Senha para nós é "etec"
$senha = $argv[1];
if(sha1($senha)=='925f631c4ece772dceaee694ceb09e43bf07e5c9'){
    echo "Acesso permitido \n";
}else{
    echo "Acesso negado \n";
}

