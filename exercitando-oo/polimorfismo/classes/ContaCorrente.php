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
            if($this->getSaldo() >= $value)
            {
                $this->setSaldo($this->getSaldo() - $value - 0.10);
            }else
            {
                echo "<p>Saldo Insuficiente!</p>";
            }
        }

    }

?>