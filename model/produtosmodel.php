<?php
require_once __DIR__ . "/../config/Database.php";



class ProdutoModel
{

    private $conn;
    private $tabela = "produtos";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }



    public function listar()
    {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function cadastrar($nome, $descricao, $id_categoria, $preco, $imagem)
    {
        $query = "INSERT INTO $this->tabela (nome, descricao, id_categoria, preco, imagem) VALUES (:nome, :descricao, :id_categoria, :preco, :imagem)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
    public function findById($id)
    {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);

        return $stmt->fetch();
    }

    public function editar($id, $nome, $descricao, $id_categoria, $preco, $imagem)
    { {
            $query = "UPDATE $this->tabela 
                  SET nome = :nome, descricao = :descricao, id_categoria = :id_categoria, preco = :preco, imagem =:imagem
                  WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':id_categoria', $id_categoria);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':imagem', $imagem);
            $stmt->execute();

            return $stmt->rowCount() > 0;
        }
    }

    public function deletar($id) {
        $query = "DELETE FROM $this->tabela WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
        return $stmt->fetch();
     }
}

?>