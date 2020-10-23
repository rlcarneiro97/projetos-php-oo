<?php

    require_once "Pessoa.php";
    require_once "Fisica.php";
    require_once "Juridica.php";

    $juridica = new Juridica("Unipe", "1987-2008");
    $juridica2 = new Juridica();
    $juridica->validarCnpj();
    $juridica2->validarCnpj();

    $juridica = null;
    $juridica2 = null;

?>