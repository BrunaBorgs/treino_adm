<?php
require_once __DIR__ . "\..\..\model\usuariosmodel.php";


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $UsuariosModel = new UsuariosModel();
    $usuario = $UsuariosModel->findById($id);


} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];

    $usuario = new UsuariosModel();

    $usuario->editar($id, $nome, $email, $telefone, $data_nascimento, $cpf);
    return header("Location: usuarios.php");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="/treino_adm//view/assets/css/style2.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\componentes\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\componentes\sidebar.php'; ?>

    <main>
        <form action="editar_usuario.php" method="POST">
            <div class="cad-cont">
                <h1 class="text">Editar Usuário</h1>
                <div>
                    <input type="hidden" name="id" value="<?php echo $id ?>" required>
                </div>
                <div>
                    <input type="text" name="nome" value="<?php echo $usuario->nome ?>" required>
                </div>
                <div>
                    <input type="text" name="email" value="<?php echo $usuario->email ?>" required>
                </div>
                <div>
                    <input type="text" name="telefone" value="<?php echo $usuario->telefone ?>" required>
                </div>
                <div>
                    <input type="text" name="data_nascimento" value="<?php echo $usuario->data_nascimento ?>" required>
                </div>
                <div>
                    <input type="text" name="cpf" value="<?php echo $usuario->cpf ?>" required>
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