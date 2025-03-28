<?php

require_once __DIR__  . '/../../model/categoriamodel.php';

$categoriaModel = new CategoriaModel();
$lista = $categoriaModel->listar();

//modo edicao ou criacao
if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $categoriaModel = new CategoriaModel();
    $categoria = $categoriaModel->buscarPorId($_GET['id']);
} else {
    $modo = 'CADASTRO';
    $categoria = [
        'id' => '',
        'nome' => '',
    ];
}


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