<?php

    require_once "../polimorfismo/autoload.php";

    use Classes\Conta;
    use Classes\ContaCorrente;
    use Classes\ContaPoupanca;

    $contaCorrente = new ContaCorrente(200.0);
    $contaPoupanca = new ContaPoupanca(500.0);

    $contaCorrente->saca(100.0);
    $contaPoupanca->saca(100.0);

    $contaCorrente->imprimeExtrato();
    $contaPoupanca->imprimeExtrato();

?>