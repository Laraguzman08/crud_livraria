<?php

include "../infra/conexao.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ano = $_POST["ano"];

// query com ? no lugar dos valores
$sql = "INSERT INTO livros (titulo,autor,ano) VALUES (?,?,?)";
$stmt = $conexao->prepare($sql); // prepara a consulta no banco
$stmt->bind_param("ssi", $titulo, $autor, $ano); // liga cada variavel a um ?
$stmt->execute(); // os dados são enviados

header("Location: ../index.php");
?>