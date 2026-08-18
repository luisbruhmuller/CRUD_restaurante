<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuarios (nome,email) VALUES ('$nome','$email')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>