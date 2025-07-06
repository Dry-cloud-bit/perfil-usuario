


<?php
include("conexao.php");
header('Content-Type: application/json');

// Recebe os dados do JavaScript
$data = json_decode(file_get_contents("php://input"));

if (!$data) {
    http_response_code(400);
    echo json_encode(["erro" => "Dados inválidos"]);
    exit;
}

// Prepara a query para inserir ou atualizar (vamos assumir 1 perfil apenas por enquanto)
$sql = "REPLACE INTO perfil_usuario (id, nome, idade, estado, bairro, rua, biografia, foto_url) 
        VALUES (1, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sisssss", $data->nome, $data->idade, $data->estado, $data->bairro, $data->rua, $data->biografia, $data->foto_url);
$stmt->execute();

echo json_encode(["status" => "ok"]);
?>
