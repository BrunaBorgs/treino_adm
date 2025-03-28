<?php

require_once __DIR__  . '/../../model/produtosmodel.php';

$produtoModel = new ProdutoModel();
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
                  <?php foreach ($produtos as $produtos) { ?>
                        <tr>
                            <td><?php echo $produtos['id'] ?></td>
                            <td><?php echo $produtos['nome'] ?></td>
                            <td><?php echo $produtos['descricao'] ?></td>
                            <td><?php echo $produtos['categoria'] ?></td>
                            <td><?php echo $produtos['preco'] ?></td>
                            <td>  
                                <!-- METHODS - Get / Post -->
                                <form action="visualizar.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button class="icon">
                                        <span class="material-symbols-outlined">
                                            visibility
                                        </span>
                                    </button>
                                </form>

                                <form action="cadastro.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button class="icon">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                                </form>

                                <form action="excluir.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button class="icon"
                                        onclick="return confirm('Tem certeza que deseja excluir o filme?')">
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