<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Programador.php";
    require_once "classes/Gerente.php";

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $observacao = $_POST['observacao'];
    $cargo = $_POST['cargo'];

    // echo "<p>Nome: {$nome}</p><p>Salario: {$salario}</p><p>Obs: {$observacao}</p><p>Cargo: {$cargo}</p>";

    if($cargo === "1")
    {
        $gerente = new Gerente($nome, $salario, $observacao);
        $gerente->relatorioFunc();
    }
    
    if($cargo === "2")
    {
        $programador = new Programador($nome, $salario, $observacao);
        $programador->relatorioFunc();
    }

?>