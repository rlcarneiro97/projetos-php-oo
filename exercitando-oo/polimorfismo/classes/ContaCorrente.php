<?php

    namespace Classes;

    class ContaCorrente extends Conta
    {

        public function __construct($saldo = 0.0)
        {
            parent::__construct($saldo);
        }

        public function saca($value = 0.0)
        {
            echo "<p>Valor para saque de conta corrente: {$value}</p>";
        }

    }

?>