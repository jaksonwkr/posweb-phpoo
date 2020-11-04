<?php

    require_once "autoload.php";

    use Classes\Funcionario;
    use Classes\Gerente;
    use Classes\Programador;

    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $obs = $_POST["obs"];
    $cargo = $_POST["cargo"];

    if ($cargo == "1") {
        $funcionario = new Programador($nome, $salario, $obs);
    } else {
        $funcionario = new Gerente($nome, $salario, $obs);
    }
    
    $funcionario->relatorioFunc();

?>