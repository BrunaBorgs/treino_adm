<!-- <?php
// require 'model/categoriamodelg.php';

// $objCategoria = new CategoriaModelG();

// if (isset($_POST['cad-categoria'])) {
//     $nome = $_POST['nome'];
//     $descricao = $POST['descricao'];
// }

// ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>

    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <form class="form-cadastro" method="POST">
            <input type="text" placeholder="Nome">
            <input type="text" placeholder="Descrição">
            <button name="cad-categoria">Cadastrar Categoria</button>
        </form>
        <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>

    </main>
</body>

</html> -->