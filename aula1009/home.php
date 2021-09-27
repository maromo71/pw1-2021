<?php
    require_once "config.php";

    $_SESSION["usuario"] = $_POST["user"];
    $_SESSION["senha"] = $_POST["password"];

    if($_SESSION["usuario"]==""){
        header("Location: login.php");
        exit();
    }
    
    if( !(($_SESSION["usuario"]=="admin") && ($_SESSION["senha"]=="123")) ){
        header("Location: error.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-3">Home</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2>Vitrine</h2>
                <p>Usuário Logado: <?=$_SESSION["usuario"]?> </p>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</html>