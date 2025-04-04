<?php

require_once __DIR__ . '/../../model/usuariosmodel.php';

$usuarioModel = new UsuariosModel();

if (isset($_POST['id'])) {
    $usuarioModel = new UsuariosModel();
    $usuarioModel->deletar($_POST['id']);
}

$lista = $usuarioModel->listar();


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
        <h1>Usuários</h1>
        <form action="cadastrar_usuario.php" method="GET">
            <input type="hidden" name="id" value="">
            <button class="cad-button">
                Cadastrar Usuário
            </button>
        </form>

        <div class="scroll">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de nascimento</th>
                    <th>Cpf</th>
                </thead>
                <tbody>
                    <?php foreach ($lista as $usuarios) { ?>
                        <tr>
                            <td><?php echo $usuarios['id'] ?></td>
                            <td><?php echo $usuarios['nome'] ?></td>
                            <td><?php echo $usuarios['email'] ?></td>
                            <td><?php echo $usuarios['telefone'] ?></td>
                            <td><?php echo $usuarios['data_nascimento'] ?></td>
                            <td><?php echo $usuarios['cpf'] ?></td>
                            <!-- METHODS - Get / Post -->
                            <td>

                                <form action="editar_usuario.php" method="GET">
                                    <input type="hidden" name="id" value="<?php echo $usuarios['id'] ?>">
                                    <button class="icon">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>
                                </form>

                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $usuarios['id'] ?>">
                                    <button class="icon" onclick="return confirm('Você deseja excluir esse usuário?')">
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