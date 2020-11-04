<?php

    require_once "autoload.php";

    use Classes\Conta;
    use Classes\ContaCorrente;
    use Classes\ContaPoupanca;


    $corrente = new ContaCorrente();
    $poupanca = new ContaPoupanca();

    $corrente->setSaldo(200.00);
    $poupanca->setSaldo(500.00);

    $corrente->saca(100.00);
    $poupanca->saca(100.00);

    $corrente->imprimeExtrato();
    $poupanca->imprimeExtrato();
?>