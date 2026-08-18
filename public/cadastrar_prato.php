<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$id_usuario = $_POST["id_usuario"]

$sql = "INSERT INTO pratos (id,nome,descricao,preco,categoria,id_usuario) VALUES ('$id','$nome','$descricao','$preco','$categoria','$id_usuario')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>