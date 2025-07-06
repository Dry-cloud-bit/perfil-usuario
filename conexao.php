<?php
// Dados da conexão
$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$banco    = "usuarios";


$conn = new mysqli($servidor, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


?>
