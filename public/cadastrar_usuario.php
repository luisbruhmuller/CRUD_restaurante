<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario (id,nome,descricao,preco,categoria,id_usuario) VALUES ('$id,$nome,$descricao,$preco,$categoria,$id_usuario')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>