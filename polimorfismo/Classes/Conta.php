<?php

    namespace Classes;

    class Conta
    {
        protected $saldo;

        public function __construct($saldo=0.00)
        {
            $this->saldo = $saldo;
        }

        public function deposita($valor)
        {
            $this->saldo = $this->saldo + $valor;
        }

        public function saca($valor)
        {
            $this->saldo = $this->saldo - $valor;
        }

        public function imprimeExtrato()
        {
            echo "<p>Saldo Final: {$this->saldo}</p>";
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }
    }

?>