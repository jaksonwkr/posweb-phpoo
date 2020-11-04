<?php
    require_once "autoload.php";

    use Interfaces\ICaracteristicas;
    use Classes\Veiculo;
    use Classes\Carro;
    use Classes\Moto;

    $nome = $_POST["nome"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $tipo = $_POST["tipo"];

    if ($tipo == "1") {
        $veiculo = new Carro($nome, $marca, $modelo);
        echo "<h2>Carro</h2>\n";
    } else {
        echo "<h2>Moto</h2>\n";
        $veiculo = new Carro($nome, $marca, $modelo);
    }

    $veiculo->exibeNome();
    $veiculo->exibeMarca();
    $veiculo->exibeModelo();
?>