<?php

require_once "config.php";

//0 - desabilitada
//1 - habilitada mas não existe
//2 - habilitada e ativa

if(session_status()==PHP_SESSION_ACTIVE){
    echo "Seção está ativa <br/>";
}else{
    if(session_status()==PHP_SESSION_NOME){
        echo "Seção habilitada mas não existe <br />";
    }else{
        echo "Seção desabilitada";
    }
}

