<?php
require_once __DIR__ . '/../config/Database.php';

class CategoriaModel
{

    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    private $tabela = "categorias";


    public function listar() {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

?>