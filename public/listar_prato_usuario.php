<?php

include "../infra/conexao.php";

$id_usuario = $_GET["id_usuario"];
$sql = "SELECT * FROM pratos WHERE id_usuario = $id_usuario";
$resultado = mysqli_query($conexao, $sql );

$pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>

<!DOCTYPE html>
<html lang="en">

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
        <h2>listar por usuario</h2>
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
                        <td><?php echo $prato["id"] ?></td>
                        <td><?php echo $prato["nome"] ?></td>
                        <td><?php echo $prato["descricao"] ?></td>
                        <td><?php echo $prato["preco"] ?></td>
                        <td><?php echo $prato["categoria"] ?></td>
                        <td>
                            <a href="public/editar_prato.php?id=<?php echo $prato["id"] ?>">Editar</a>
                            <a href="public/excluir_prato.php?id=<?php echo $prato["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>