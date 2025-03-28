<?php
require_once __DIR__ . "/../config/Database.php";



class ProdutoModel {

    private $conn;
    private $tabela = "produtos";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }


   
    public function listar() {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function buscarPorId($id) {
        $indexProduto = -1;

        // $array_filtrado = array_filter(
        //     $this->produtos,
        //     function ($produto, $index) use ($id, &$indexProduto) {
        //         if ($produto['id'] == $id) {
        //             $indexProduto = $index;
        //             return $produto;
        //         }
        //     },
        //     ARRAY_FILTER_USE_BOTH
        // );
    }
    
    
}

?>