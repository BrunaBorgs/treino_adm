<?php
require_once __DIR__ . '\..\..\model\usuariosmodel.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];

    $UsuariosModel = new UsuariosModel();
    $sucesso = $UsuariosModel->cadastrar($nome, $email, $telefone, $data_nascimento, $cpf);

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
        <form action="cadastrar_usuario.php" method="POST">
            <div class="cad-cont">
                <h1 class="text">Cadastrar Usuário</h1>
                <div>
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email">

                </div>
                <div>
                    <input type="text" name="telefone" placeholder="Telefone">
                </div>
                <div>
                    <input type="text" name="data_nascimento" placeholder="Data de nascimento">
                </div>
                <div>
                    <input type="text" name="cpf" placeholder="CPF">
                </div>
                <button class="cad-button" type="submit">Cadastrar Usuário</button>
            </div>
        </form>
    </main>
    <?php require_once __DIR__ . '\..\componentes\footer.php'; ?>

</body>

</html>