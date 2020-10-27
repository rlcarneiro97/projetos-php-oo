<?php

    // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
    $servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
    $tabela = $servidor->query("SELECT id, nome FROM famosos");

    if($tabela){
        foreach($tabela as $linha){
            echo "<p>{$linha['id']} | {$linha['nome']}</p>";
        }
    }

    $servidor = null;

?>