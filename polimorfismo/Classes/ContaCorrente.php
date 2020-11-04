<?php

    namespace Classes;

    final class ContaCorrente extends Conta
    {

        public function saca($valor)
        {
            $this->saldo = $this->saldo - ($valor + 0.10);
        }
    }

?>