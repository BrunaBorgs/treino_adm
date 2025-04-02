<?php
require_once __DIR__ . "/../../config/Database.php";
require_once __DIR__ . "/../../model/categoriamodel.php";
require_once __DIR__ . "/../../model/produtosmodel.php";
require_once __DIR__ . "/../../model/usuariosmodel.php";

$id = $_GET["id"];

if ($id == "") {
    if(header("Location: categorias.php")) {
        return header ("Location: categorias.php");
    }
    if(header("Location: produtos.php")) {
        return header ("Location: produtos.php");
    }
    if(header("Location: usuarios.php")) {
        return header ("Location: usuarios.php");
    }
    
}

$CategoriaModel = new CategoriaModel($connUrl);
$categoria = $CategoriaModel->deletar($id);

?>