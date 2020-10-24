<?php

    class Gerente extends Funcionario
    {

        private $linguagem;

        public function __construct($nome, $salario, $linguagem="")
        {
            parent::__construct($nome);
            parent::__construct($salario);
            $this->linguagem = $linguagem;
        }

        /**
         * Get the value of linguagem
         */ 
        public function getLinguagem()
        {
                return $this->linguagem;
        }

        /**
         * Set the value of linguagem
         *
         * @return  self
         */ 
        public function setLinguagem($linguagem)
        {
                $this->linguagem = $linguagem;

                return $this;
        }
    }

?>