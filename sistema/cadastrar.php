<?php
    require_once "autoload.php";

    use Classes\Cadastro;

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $cadastro = new Cadastro();
    $cadastro->setNome($nome);
    $cadastro->setTelefone($telefone);
    $cadastro->setEmail($email);

    $cadastro->inserir();
    $cadastro->exibir();
?>