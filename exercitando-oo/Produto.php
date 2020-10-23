<?php

    class Produto { 
        public $codigo;
        public $nome;
        public $preco;

        public function __construct($codigo, $nome, $preco) {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function __destruct() {
            echo "<p>Adeus, mundo cruel!!!</p>";
        }

        public function imprimeProduto(){
            echo "<p>Produto: {$this->nome}</p>";
            echo "<p>Preco: {$this->preco}</p>";
        }
    }

?>