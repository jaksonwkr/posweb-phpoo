<?php

    namespace Classes;

    class Funcionario
    {
        protected $nome;
        protected $salario;

        public function __construct($nome, $salario)
        {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        public function setSalario($salario)
        {
            $this->salario = $salario;
        }

        public function relatorioFunc()
        {
            echo "<p>Nome: {$this->nome} </p>";
            echo "<p>Salário: {$this->salario} </p>";
        }
    }

?>