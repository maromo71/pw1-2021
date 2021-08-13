<?php
include_once "opiniao.php";
//Criar uma variável objeto que representa uma opinião (haha opinião sincera.)
$opiniaoSincera = new Opiniao;
//Vamos receber aqui os dados que vem do formulário
if ($_POST["optionOpiniao"] == "" ||
      $_POST["comboProduto"] == "" ||
      $_POST["inputComentario"] == ""){
        echo "<h2> Favor preencher todos os campos </h2>";
        echo "<a href='index.php'>Voltar</a>";
        exit(1); //finaliza
}
$opiniao = $_POST["optionOpiniao"];
$produto = $_POST["comboProduto"];
$comentario = $_POST["inputComentario"];
//Chamar o método cadastar_opinião
$opiniaoSincera->cadastrar_opiniao($opiniao, $produto, $comentario);
//Chamar o método para mostrar a opinião
$texto = $opiniaoSincera->mostrar_opiniao_cadastrada();
echo $texto;