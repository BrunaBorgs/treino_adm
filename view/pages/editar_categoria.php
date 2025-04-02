<?php
require_once __DIR__ . "\..\..\model\categoriamodel.php";


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $CategoriaModel= new CategoriaModel();
    $categoria = $CategoriaModel->findById($id);


} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];

    $categoria = new CategoriaModel();

    $categoria->editar($id, $nome, $descricao);
    return header("Location: categorias.php");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <form action="editar_categoria.php" method="POST">
            <div class="cad-cont">
                <h1 class="text">Editar Categoria</h1>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id ?>" required>
                </div>
                <div>
                    <input type="text" name="nome" value="<?php echo $categoria->nome ?>" required>
                </div>
                <div>
                    <input type="text" name="descricao" value="<?php echo $categoria->descricao ?>" required>
                </div>

                <button class="cad-button">
                    Salvar Alterações
                </button>
            </div>
        </form>

    </main>
    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>

</body>

</html>