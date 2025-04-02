<?php
require_once __DIR__ . "/../config/Database.php";
class UsuariosModel
{

    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    private $tabela = "usuarios";


    public function listar()
    {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function cadastrar($nome, $email, $telefone, $data_nascimento, $cpf)
    {
        $query = "INSERT INTO $this->tabela (nome, email, telefone, data_nascimento, cpf) VALUES (:nome, :email, :telefone, :data_nascimento, :cpf)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':cpf', $cpf);
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
    public function editar($id, $nome, $email, $telefone, $data_nascimento, $cpf)
    { {
            $query = "UPDATE $this->tabela 
                  SET nome = :nome, email = :email, telefone = :telefone, data_nascimento = :data_nascimento, cpf = :cpf
                  WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':data_nascimento', $data_nascimento);
            $stmt->bindParam(':cpf', $cpf);
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