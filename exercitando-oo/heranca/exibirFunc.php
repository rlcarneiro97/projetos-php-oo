<?php

    require_once "../heranca/autoload.php";

    use Classes\Funcionario;
    use Classes\Programador;
    use Classes\Gerente;

    if($_POST){

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
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do Funcionario(Programador)!", $e->getMessage(), "\n";
            }

            $funcionario->relatorioFunc();

        }else
        {
            echo "<p>Valores do formulário inválidos!</p>";
        }

    }else
    {
        echo "<p>Nenhum dado for recebido pelo Formulário</p>";
    }

?>