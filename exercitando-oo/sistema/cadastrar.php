<?php

    require_once "../sistema/conexao.php";

    if($_POST)
    {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
    
        if(is_string($nome) && !is_numeric($nome) && is_string($telefone) && is_string($email) && !is_numeric($email))
        {
            try
            {
                createBook($nome, $telefone, $email);

            }catch(Exception $e)
            {
                echo "Erro na criacao do usuario!", $e->getMessage(), "\n";
            }
        }else
        {
            echo "<p>Valores do formulário inválidos!</p>";
        }
    
    }else
    {
        echo "<p>Nenhum dado for recebido pelo formulário</p>";
    }

    //functions
    function createBook($nome, $telefone, $email)
    {
        $connDatabase = Conexao::getInstance();
    
        $sql = "INSERT INTO cadastro (nome, telefone, email) VALUES (?, ?, ?)";
        $query = $connDatabase->prepare($sql);
    
        $query->bindValue(1, $nome);
        $query->bindValue(2, $telefone);
        $query->bindValue(3, $email);
        $query->execute();
    
        $connDatabase = null;
        header("location: ../sistema/lista_ususarios.php");
    }

?>