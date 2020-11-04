<?php
    require_once "autoload.php";

    use Classes\Animal;
    use Classes\Carnivoro;
    use Classes\Herbivoro;

    $carnivoro = new Carnivoro();
    $herbivoro = new Herbivoro();
    
    $carnivoro->setCome("carne");
    $herbivoro->setCome("legumes");

    $carnivoro->habitoAlimentar();
    $herbivoro->habitoAlimentar();

?>