<?php

    require_once "../exemplo-php-com-bd/Conexao.php";
    $connDatabase = Conexao::getInstance();

    $sql = "DELETE FROM livro WHERE id = ?";
    $query = $connDatabase->prepare($sql);
    $query->bindValue(1, 4);
    $query->execute();

    $connDatabase = null;

?>