<?php
require_once __DIR__ . '\..\..\model\produtosmodel.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $id_categoria = $_POST["id_categoria"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $ProdutoModel = new ProdutoModel();
    $sucesso = $ProdutoModel->cadastrar($nome, $descricao, $id_categoria, $preco, $imagem);

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
    <title>Cadastrar produto</title>
    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>


    <main>
        <form action="cadastrar_produto.php" method="POST">
            <div class="cad-cont">
                <h1 class="text">Cadastrar Produto</h1>
                <div>
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div>
                    <input type="text" name="descricao" placeholder="Descrição">

                </div>
                <div>
                    <input type="text" name="id_categoria" placeholder="id da categoria">
                </div>
                <div>
                    <input type="text" name="preco" placeholder="Preço">
                </div>
                <div>
                    <input type="text" name="imagem" placeholder="URL da imagem">
                </div>
                <button class="cad-button" type="submit">Cadastrar Produto</button>
            </div>
        </form>
    </main>
    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>

</body>

</html>