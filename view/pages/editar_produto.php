<?php
require_once __DIR__ . "\..\..\model\produtosmodel.php";


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $ProdutoModel = new ProdutoModel();
    $produto = $ProdutoModel->findById($id);


} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $id_categoria = $_POST["id_categoria"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $produto = new ProdutoModel();

    $produto->editar($id, $nome, $descricao, $id_categoria, $preco, $imagem);
    return header("Location: produtos.php");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <form action="editar_produto.php" method="POST">
            <div class="cad-cont">
                <h1 class="text">Editar Produto</h1>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id ?>" required>
                </div>
                <div>
                    <input type="text" name="nome" value="<?php echo $produto->nome ?>" required>
                </div>
                <div>
                    <input type="text" name="descricao" value="<?php echo $produto->descricao ?>" required>
                </div>
                <div>
                    <input type="text" name="id_categoria" value="<?php echo $produto->id_categoria ?>" required>
                </div>
                <div>
                    <input type="text" name="preco" value="<?php echo $produto->preco ?>" required>
                </div>
                <div>
                    <input type="text" name="imagem" value="<?php echo $produto->imagem ?>" required>
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