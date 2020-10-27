<?php

    namespace Classes;

    class Carnivoro extends Animal
    {

        public function __construct($come="")
        {
            $this->come = $come;
        }

        public function habitoAlimentar()
        {
            echo "<p>{$this->come}</p>";
        }

    }

?>