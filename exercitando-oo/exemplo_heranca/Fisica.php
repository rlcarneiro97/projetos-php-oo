<?php

    class Fisica extends Pessoa{

        private $cpf;

        public function __construct($nome="", $cpf=""){
            parent::__construct($nome);
            $this->cpf = $cpf;
        }

        public function validarCpf(){
            echo "<p>A ser implementado no futuro!</p>";
        }

    }

?>