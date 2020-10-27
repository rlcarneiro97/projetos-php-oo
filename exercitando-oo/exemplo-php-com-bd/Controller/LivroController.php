<?php

    require_once "../Dao/LivroDao.php";
    require_once "../Model/Livro.php";

    if($_POST)
    {
        $nome = $_POST['nome'];
        $tipoRequisicao = $_POST['tipo-requisicao'];
    
        if(is_string($nome) && !is_numeric($nome) && is_string($tipoRequisicao) && !is_numeric($tipoRequisicao))
        {
            try
            {
                if($tipoRequisicao === "create")
                {
                    createBook();
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do livro!", $e->getMessage(), "\n";
            }
    
            try
            {
                if($tipoRequisicao === "update")
                {
                    updateBook();
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do livro!", $e->getMessage(), "\n";
            }

            try
            {
                if($tipoRequisicao === "delete")
                {
                    deleteBook();
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do livro!", $e->getMessage(), "\n";
            }
    
        }else
        {
            echo "<p>Valores do formulário inválidos!</p>";
        }
    
    }

    readBook();

    //functions
    function createBook()
    {
        $nome = $_POST['nome'];

        $livro = Livro::getInstance($nome);
        $livroDao = LivroDao::getInstance();
        
        $livroDao->createBook($livro);
    }

    function readBook()
    {
        $livroDao = LivroDao::getInstance();
        $livroDao->readBook();
    }

    function updateBook()
    {
        $nome = $_POST['nome'];
        $id = $_POST['id'];

        $livro = Livro::getInstance($nome);
        $livroDao = LivroDao::getInstance();

        $livroDao->updateBook($livro, $id);
    }

    function deleteBook()
    {
        $id = $_POST['id'];

        $livroDao = LivroDao::getInstance();
        
        $livroDao->deleteBook($id);
    }

?>