<?php
require_once __DIR__ . '\..\..\model\categoriamodel.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    $CategoriaModel = new CategoriaModel();
    $sucesso = $CategoriaModel->cadastrar($nome, $descricao);

    // if ($sucesso) {
    //     return header("Location: listar.pphp?mensagem=sucesso");
    // } else {
    //     return header("Location: listar.pphp?mensagem=erro");

    // }

}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar categoria</title>
    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>


    <main>
        <form action="cadastrar_categoria.php" method="POST">
            <div class="cad-cont">
                <h1 class="text">Cadastrar Categoria</h1>
                <div>
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div>
                    <input type="text" name="descricao" placeholder="Descrição">

                </div>
                <button class="cad-button" type="submit">Cadastrar Categoria</button>
            </div>
        </form>
    </main>
    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>

</body>

</html>