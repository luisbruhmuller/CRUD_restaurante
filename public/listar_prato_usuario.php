<?php

include "../infra/conexao.php";

$id_usuario = $_GET["id_usuario"] ?? null;

if (!$id_usuario || !is_numeric($id_usuario)) {
    die("ID de usuário inválido.");
}

$sql = "SELECT * FROM pratos WHERE id_usuario = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id_usuario);
mysqli_stmt_execute($stmt);
$pratos = mysqli_stmt_get_result($stmt);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Restaurante</h1>
    </header>
    <main>
        <h2>Listar por usuário</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
            <?php while ($prato = mysqli_fetch_assoc($pratos)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($prato["id"]) ?></td>
                    <td><?php echo htmlspecialchars($prato["nome"]) ?></td>
                    <td><?php echo htmlspecialchars($prato["descricao"]) ?></td>
                    <td><?php echo htmlspecialchars($prato["preco"]) ?></td>
                    <td><?php echo htmlspecialchars($prato["categoria"]) ?></td>
                    <td>
                        <a href="public/editar_prato.php?id=<?php echo urlencode($prato["id"]) ?>">Editar</a>
                        <a href="public/excluir_prato.php?id=<?php echo urlencode($prato["id"]) ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </main>
    <footer>

    </footer>

</body>

</html>