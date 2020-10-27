<?php

    class Livro
    {
        private static $instance;

        //singleton
        public static function getInstance($nome)
        {
            if(!isset(self::$instance))
            {
                self::$instance = new Livro($nome);
            }

            return self::$instance;
        }

        // private $id;
        private $nome;

        function __construct($nome)
        {
            $this->nome = $nome;
        }
        
        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        // public function getId()
        // {
        //         return $this->id;
        // }
    }

?>