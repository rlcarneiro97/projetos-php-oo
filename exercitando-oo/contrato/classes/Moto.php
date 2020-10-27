<?php

    // namespace Classes;

    // use Interfaces\ICaracteristicas;

    class Moto extends Veiculo implements ICaracteristicas
    {

        function __construct($nome, $marca, $modelo)
        {
            // $this->nome = $nome;
            // $this->marca = $marca;
            // $this->modelo = $modelo;
            parent::__construct($nome, $marca, $modelo);
        }

        public function exibeNome()
        {
            echo "<p>{$this->nome}</p>";
        }

        public function exibeMarca()
        {
            echo "<p>{$this->marca}</p>";
        }

        public function exibeModelo()
        {
            echo "<p>{$this->modelo}</p>";
        }
    }

?>