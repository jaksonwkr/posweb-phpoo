<?php
    namespace Classes;

    abstract class Animal
    {
        protected $come;

        abstract public function habitoAlimentar();
        abstract public function setCome($come);
        abstract public function getCome();
    } 
?>
