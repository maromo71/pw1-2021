<?php
function somar($valor1, $valor2){
    $resultado = $valor1 + $valor2;
    return $resultado;
}
function subtrair($valor1, $valor2){
    $resultado = $valor1 - $valor2;
    return $resultado;
}
function multiplicar($valor1, $valor2){
    $resultado = $valor1 * $valor2;
    return $resultado;
}
function dividir($valor1, $valor2){
    $resultado = $valor1 / $valor2;
    return $resultado;
}


//Receber os dados do formulário
$v1 = $_POST["inputValor1"];
$v2 = $_POST["inputValor2"];
$operacao = $_POST["optOperacao"];

switch($operacao){
    case '+':
        $result = somar($v1, $v2);
        break;
    case '-':
        $result = subtrair($v1, $v2);
        break;
    case '*':
        $result = multiplicar($v1, $v2);
        break;
    case '/':
        $result = dividir($v1, $v2);
        
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da operação</title>
</head>
<body>
    <h1>Resultado da Operação</h1>
    <h2>Valores Informados e Resultado</h2>
    <p>
        Os valores informados: <?=$v1?> e <?=$v2?> <br>
        A operação selecionada foi <?=$operacao?> e o resultado é: <?=$result?>
    </p>
</body>
</html>
