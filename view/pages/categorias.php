<?php

require_once __DIR__ . '/../../model/categoriamodel.php';

$categoriaModel = new CategoriaModel();


// //modo edicao ou criacao
// if (isset($_GET['id'])) {
//     $modo = 'EDICAO';
//     $categoriaModel = new CategoriaModel();
//     $categoria = $categoriaModel->buscarPorId($_GET['id']);
// } else {
//     $modo = 'CADASTRO';
//     $categoria = [
//         'id' => '',
//         'nome' => '',
//     ];
// }

if (isset($_GET['delete_id'])) {
    $categoriaModel = new CategoriaModel();
    $deleteId = $_GET['delete_id'];
    $categoriaModel->deletar($deleteId);
}
$lista = $categoriaModel->listar();

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
        <h1>Categorias</h1>
        <form action="cadastrar_categoria.php" method="GET">
            <input type="hidden" name="id" value="">
            <button class="cad-button">
                Cadastrar Categoria
            </button>
        </form>
        <div class="scroll">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                </thead>
                <tbody>
                    <?php foreach ($lista as $categorias) { ?>
                        <tr>
                            <td><?php echo $categorias['id'] ?></td>
                            <td><?php echo $categorias['nome'] ?></td>
                            <td><?php echo $categorias['descricao'] ?></td>
                            <td>
                                <!-- METHODS - Get / Post -->

                                <form action="editar_categoria.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $categorias['id'] ?>">
                                    <button class="icon">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                                </form>

                                <form method="GET">
                                    <a class="icon" href="?delete_id=<?= $categorias['id'] ?>"
                                        onclick="return confirm('Tem certeza que deseja excluir a categoria?')">
                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>
                                    </a>
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