<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$id_usuario = $_POST["id_usuario"];

$sql = "UPDATE pratos SET nome='$nome',descricao='$descricao',preco='$preco' categoria='$categoria' WHERE id = '$id' id_usuario='$id_usuario'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");