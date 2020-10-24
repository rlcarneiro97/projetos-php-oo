<?php

    namespace Classes;

    abstract class Conta
    {
        protected $saldo;

        public function __construct($saldo = 0.0)
        {
            $this->saldo = $saldo;
        }

        public function deposita($value = 0.0)
        {
            $this->setSaldo($this->getSaldo() + $value);
        }

        public function saca($value = 0.0)
        {
            if($this->getSaldo() >= $value)
            {
                $this->setSaldo($this->getSaldo() - $value);
            }else
            {
                echo "<p>Saldo Insuficiente!</p>";
            }
            
        }

        public function imprimeExtrato()
        {
            echo "<p>Extrato da Conta: {$this->getSaldo()}</p>";
        }

        /**
         * Get the value of saldo
         */ 
        public function getSaldo()
        {
                return $this->saldo;
        }

        /**
         * Set the value of saldo
         *
         * @return  self
         */ 
        public function setSaldo($saldo)
        {
                $this->saldo = $saldo;

                return $this;
        }
    }

?>