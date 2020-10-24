<?php

    require_once "Funcionario.php";
    require_once "Programador.php";
    require_once "Gerente.php";

    $gerente = new Gerente("Rafael", 2000.0, "projeto02");
    $programador = new Programador("Jeffrey", 1500.0, "PHP");

?>