<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$id_usuario = $_POST["id_usuario"];

$sql = "INSERT INTO pratos (nome,descricao,preco,categoria,usuario_id) VALUES ('$nome','$descricao','$preco','$categoria','$id_usuario')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>