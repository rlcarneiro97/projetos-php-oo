<?php

    require_once "../exemplo-php-com-bd/Conexao.php";
    $connDatabase = Conexao::getInstance();
    
    $sql = "UPDATE livro SET nome = ? WHERE id = ?";
    $query = $connDatabase->prepare($sql);
    $query->bindValue(1, 'Severino Carneiro');
    $query->bindValue(2, 1);
    $query->execute();

    $connDatabase = null;

?>