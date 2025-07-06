<?php
include("conexao.php");


$id = $_GET['id'];
$sql = "DELETE FROM perfil_usuario WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

echo json_encode(["status" => "excluido"]);
