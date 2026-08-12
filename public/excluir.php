<?php
include "../infra/conexao.php";
$id = $_GET["id"];

$sql = "DELETE FROM livros WHERE id=?";
$stmt = $conexao->prepare($sql); //prepara a consulta no banco
$stmt->bind_param("i", $id); // liga a variavel ao ? e i = numero inteiro
$stmt->execute();

header("Location: ../index.php");
?>