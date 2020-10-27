<?php

    require_once "../exemplo-php-com-bd/Conexao.php";
    $connDatabase = Conexao::getInstance();

    $sql = "SELECT * FROM livro"; // ou "SELECT id, nome FROM famosos"
    $tabela = $connDatabase->query($sql);

    if($tabela){
        foreach($tabela as $linha){
            echo "<p>{$linha['id']} | {$linha['nome']}</p>";
        }
    }

    $connDatabase = null;

?>