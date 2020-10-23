<?php

    class Juridica extends Pessoa{

        private $cnpj;

        public function __construct($nome="", $cnpj=""){
            parent::__construct($nome);
            $this->cnpj = $cnpj;
        }

        public function validarCnpj(){
            echo "<p>A ser implementado no futuro!</p>";
        }

    }

?>