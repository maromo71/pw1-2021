<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="post">
    <p>
        <label for="inputValor1">Valor 1: </label>
        <input type="text" name="inputValor1" id="inputValor1">
    </p>
    <p>
        <label for="inputValor2">Valor 2: </label>
        <input type="text" name="inputValor2" id="inputValor2">
    </p> 
    <p>     
        <input type="radio" name="optOperacao" id="optOperacao" value="+">Somar
        <input type="radio" name="optOperacao" id="optOperacao" value="-">Subtrair
        <input type="radio" name="optOperacao" id="optOperacao" value="*">Multiplicar
        <input type="radio" name="optOperacao" id="optOperacao" value="/">Dividir
    </p>
    <p>
        <input type="submit" value="Calcular">
    </p>
    </form>   
</body>
</html>