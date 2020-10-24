<?php

    if($_POST){   

        require_once "classes/Funcionario.php";
        require_once "classes/Programador.php";
        require_once "classes/Gerente.php";

        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $observacao = $_POST['observacao'];
        $cargo = $_POST['cargo'];

        if(is_string($nome) && !is_numeric($nome) && is_string($observacao) && !is_numeric($observacao) && is_numeric($salario) && $salario > 0 && is_numeric($cargo))
        {
            try
            {
                if($cargo === "1")
                {
                    $funcionario = new Gerente($nome, $salario, $observacao);
                    $funcionario->relatorioFunc();
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do Funcionario(Gerente)!", $e->getMessage(), "\n";
            }
    
            try
            {
                if($cargo === "2")
                {
                    $funcionario = new Programador($nome, $salario, $observacao);
                    $funcionario->relatorioFunc();
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do Funcionario(Programador)!", $e->getMessage(), "\n";
            }
        }else
        {
            echo "<p>Valores do formulário inválidos!</p>";
        }

    }else
    {
        echo "<p>Nenhum dado for recebido pelo Formulário</p>";
    }

?>