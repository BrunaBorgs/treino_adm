<?php
require_once __DIR__ . '\..\..\model\produtosmodel.php'
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
            <div class="produtos">
                <?php
                $produtosModel = new ProdutoModel();
                $produtos = $produtosModel->listar();
                foreach ($produtos as $produtos) { ?>
                    <div class="card_produtos">
                        <img class="produto_img" src="<?php echo $produtos['imagem']; ?>" alt="Imagem do produto">
                        <h2 class="card_text"><?php echo $produtos['nome']; ?></h2>
                        <p><?php echo $produtos['descricao']; ?></p>
                        <h2 class="card_text"><?php echo $produtos['preco']; ?></h2>
                    </div>
                <?php } ?>
            </div>

        </div>


    </main>

    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>
</body>

</html>