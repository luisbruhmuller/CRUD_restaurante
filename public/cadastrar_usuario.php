<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario (id,nome,email) VALUES ('$id','$nome','$email')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>