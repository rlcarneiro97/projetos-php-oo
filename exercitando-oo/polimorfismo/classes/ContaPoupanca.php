<?php

    namespace Classes;

    class ContaPoupanca extends Conta
    {

        public function __construct($saldo = 0.0)
        {
            parent::__construct($saldo);
        }

    }

?>