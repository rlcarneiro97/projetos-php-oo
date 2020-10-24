<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Programador.php";
    require_once "classes/Gerente.php";

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $observacao = $_POST['observacao'];
    $cargo = $_POST['cargo'];

    // echo "<p>{$nome}</p><p>{$salario}</p><p>{$observacao}</p><p>{$cargo}</p>";

    if($cargo === "gerente")
    {
        $gerente = new Gerente($nome, $salario, $observacao);
    }
    
    if($cargo === "programador")
    {
        $programador = new Programador($nome, $salario, $observacao);
    }

?>