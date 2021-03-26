<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola de PHP com HTML</title>
</head>
<body>
    <h1>Página com PHP e HTML</h1>
    <?php 
        $nome = "Rodrigo Martins";
    ?>
    <p>A aula de HTML foi com o professor <?=$nome?> </p>
    <?php
        $outronome = "Marcos Moraes";
    ?>
    <p>A aula de PHP foi com o professor <?=$outronome?> </p>
</body>
</html>