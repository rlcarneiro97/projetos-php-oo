<?php

    require_once "Produto.php";

    $produto = new Produto("001", "Camisa do Venom", 320);

    $produto->imprimeProduto();

    $produto = null;

?>