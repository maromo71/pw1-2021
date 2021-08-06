<?php
class Opiniao {
    var $opiniao;
    var $produto;
    var $comentario;

    function cadastrar_opiniao($opiniao, $produto, $comentario){
        $this->opiniao = $opiniao;
        $this->produto = $produto;
        $this->comentario = $comentario;
    }

    function mostrar_opiniao_cadastrada() {
        $texto = "<h2>Opinião sincera do cliente </h2>";
        $texto .= "<strong>Opinião: $this->opiniao </strong><br>";
        $texto .= "<strong>Streaming preferido: $this->produto </strong><br>";
        $texto .= "<strong>Comentário do cliente: $this->comentario </strong><br>";
        return $texto;
    }
}