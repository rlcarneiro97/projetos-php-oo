<?php

    namespace Classes;

    class Herbivoro extends Animal
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