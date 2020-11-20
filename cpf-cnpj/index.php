<?php

require_once("./vendor/autoload.php");

use \Bissolli\ValidadorCpfCnpj\CPF;

$cpf = new CPF("12345678900");

if ($cpf->isValid()) {
    echo "<p> CPF Válido </p>";
} else {
    echo "<p> CPF Inválido </p>";
}
echo "\n";
echo "<p>CPF formatado: {$cpf->format()}</p>"

?>