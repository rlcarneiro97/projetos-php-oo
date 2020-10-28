<?php

    require_once "../sistema/classes/Conexao.php";
    require_once "../sistema/classes/Cadastro.php";

    if($_POST)
    {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
    
        if(is_string($nome) && !is_numeric($nome) && is_string($telefone) && is_string($email) && !is_numeric($email))
        {
            try
            {
                $cadastro = Cadastro::getInstance();
                $cadastro->setNome($nome);
                $cadastro->setTelefone($telefone);
                $cadastro->setEmail($email);
                
                $cadastro->inserir($cadastro);

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

?>