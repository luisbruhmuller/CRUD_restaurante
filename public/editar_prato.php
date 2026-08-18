<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM pratos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$pratos =mysqli_fetch_assoc($resultado);

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
        <h1>CRUD - restaurante</h1>
    </header>
    <main>
        <h2>Editando o prato <?php echo $prato["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $pratos["id"]?>">

            <label for="titulo">Nome:</label>
            <input type="text" name="nome" value="<?php echo $pratos["nome"]?>">
            <br>
            <label for="autor">Descrição:</label>
            <input type="text" name="descricao" value="<?php echo $pratos["descrição"]?>">
            <br>
            <label for="ano">Preço:</label>
            <input type="number" name="preco" value="<?php echo $pratos["preço"]?>">
            <br>
            <label for="ano">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo $pratos["categoria"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>