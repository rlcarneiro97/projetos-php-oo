<?php

    namespace Classes;

    class Conta
    {
        protected $saldo;

        public function __construct($saldo = 0.0)
        {
            $this->saldo = $saldo;
        }

        public function deposita($value = 0.0)
        {
            // echo "<p>Nome: {$this->getNome()}</p>";
        }

        public function saca($value = 0.0)
        {
            // echo "<p>Nome: {$this->getNome()}</p>";
        }

        public function imprimeExtrato()
        {
            // echo "<p>Nome: {$this->getNome()}</p>";
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