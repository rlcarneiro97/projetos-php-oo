<?php

    require_once "../abstratos/autoload.php";

    use Classes\Animal;
    use Classes\Carnivoro;
    use Classes\Herbivoro;

    $velociraptor = new Carnivoro("Carne");
    $triceratops = new Herbivoro("Legumes");

    $velociraptor->habitoAlimentar();
    $triceratops->habitoAlimentar();

?>