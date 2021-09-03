<?php
    require_once "config.php";
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
        <h1 class="display-3">Login</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="home.php" method="post">
                    <div class="form-group">
                        <label for="user">Usuário</label>
                        <input class="form-control" type="text" name="user" id="user">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Logar">
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    
</body>
</html>