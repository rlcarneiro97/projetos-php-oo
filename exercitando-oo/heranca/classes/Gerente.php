<?php

    class Gerente extends Funcionario
    {

        private $projeto;

        public function __construct($nome="", $salario=0.0, $projeto="")
        {
            parent::__construct($nome, $salario);
            $this->projeto = $projeto;
        }

        public function relatorioFunc()
        {
            parent::relatorioFunc();
            echo "<p>Projeto: {$this->getProjeto()}</p>";
        }

        /**
         * Get the value of projeto
         */ 
        public function getProjeto()
        {
                return $this->projeto;
        }

        /**
         * Set the value of projeto
         *
         * @return  self
         */ 
        public function setProjeto($projeto)
        {
                $this->projeto = $projeto;

                return $this;
        }
    }

?>