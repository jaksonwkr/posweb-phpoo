<?php

    namespace Classes;

    class Moto extends Veliculo implements \Interfaces\ICaracteristicas
    {

        public function __construct($nome, $marca, $modelo)
        {
            $this->nome = $nome;
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function exibeNome()
        {
            echo "<p>Nome: " . $this->getNome() . "</p>";
        }

        public function exibeMarca()
        {
            echo "<p>Marca: " . $this->getMarca() . "</p>";
        }

        public function exibeModelo()
        {
            echo "<p>Modelo: " . $this->getModelo() . "</p>";
        }
    }
?>