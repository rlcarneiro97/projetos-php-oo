<?php

    require_once "../exemplo-php-com-bd/Conexao.php";
    $connDatabase = Conexao::getInstance();

    $sql = "INSERT INTO livro (nome) VALUES (?)";
    $query = $connDatabase->prepare($sql);

    $query->bindValue(1, "Luana de Marchi"); //exemplo: $produto->getNome()
    $query->execute();

    $connDatabase = null;

?>