<?php

require_once __DIR__ . '/../../model/produtosmodel.php';

$produtoModel = new ProdutoModel();


if (isset($_POST['id'])) {
    $produtoModel = new ProdutoModel();
    $produtoModel->deletar($_POST['id']);
}


$lista = $produtoModel->listar();





?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <h1>Produtos</h1>
        <form action="cadastrar_produto.php" method="GET">
            <input type="hidden" name="id" value="">
            <button class="cad-button">
                Cadastrar Produto
            </button>
        </form>
        <div class="scroll">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>categoria</th>
                    <th>preço</th>
                </thead>
                <tbody>
                    <?php foreach ($lista as $produtos) { ?>
                        <tr>
                            <td><?php echo $produtos['id'] ?></td>
                            <td><?php echo $produtos['nome'] ?></td>
                            <td><?php echo $produtos['descricao'] ?></td>
                            <td><?php echo $produtos['id_categoria'] ?></td>
                            <td><?php echo $produtos['preco'] ?></td>
                            <td>
                                <!-- METHODS - Get / Post -->

                                <form action="editar_produto.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $produtos['id'] ?>">
                                    <button class="icon">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                                </form>

                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $produtos['id'] ?>">
                                    <button onclick="return confirm('Você deseja excluir esse produto?')">
                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </main>

    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>
</body>

</html>