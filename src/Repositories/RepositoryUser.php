<?php
namespace Senac\SistemaDeMencoes\Repositories;

use PDO;
use Senac\SistemaDeMencoes\Config\Database;
use Senac\SistemaDeMencoes\Models\Usuario;

class RepositoryUser{
    public function __construct(private PDO $pdo)
    {
        
    }
    public function save(Usuario $usuario) {
        $pdo = Database::getConnection(); // Supondo que você tenha uma classe Database para conexões
    
        if ($usuario->getIdUsuario()) {
            // Atualizar
            $stmt = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, cpf = :cpf, matricula = :matricula, senha = :senha, id_tipo_usuario = :id_tipo_usuario WHERE id_usuario = :id_usuario");
    
            $stmt->bindValue(':nome', $usuario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $usuario->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':cpf', $usuario->getCpf(), PDO::PARAM_STR);
            $stmt->bindValue(':matricula', $usuario->getMatricula(), PDO::PARAM_STR);
            $stmt->bindValue(':senha', $usuario->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(':id_tipo_usuario', $usuario->getTipoUsuario(), PDO::PARAM_INT);
            $stmt->bindValue(':id_usuario', $usuario->getIdUsuario(), PDO::PARAM_INT);
    
            $stmt->execute();
        } else {
            // Inserir
            $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, cpf, matricula, senha, id_tipo_usuario) VALUES (:nome, :email, :cpf, :matricula, :senha, :id_tipo_usuario)");
    
            $stmt->bindValue(':nome', $usuario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $usuario->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':cpf', $usuario->getCpf(), PDO::PARAM_STR);
            $stmt->bindValue(':matricula', $usuario->getMatricula(), PDO::PARAM_STR);
            $stmt->bindValue(':senha', $usuario->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(':id_tipo_usuario', $usuario->getTipoUsuario(), PDO::PARAM_INT);
    
            $stmt->execute();
            $usuario->setIdUsuario($pdo->lastInsertId()); // Definindo o ID gerado automaticamente
        }
    }
    
    // Método para buscar um usuário por ID
    public static function findById($id_usuario) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE id_usuario = :id_usuario");
    
        $stmt->bindValue(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row) {
            return new Usuario($row['nome'], $row['email'], $row['cpf'], $row['matricula'], $row['senha'], $row['id_tipo_usuario'], $row['id_usuario']);
        }
    
        return null;
    }
    
    // Método para excluir
    public function delete(int $id) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("DELETE FROM usuario WHERE id_usuario = :id_usuario");
    
        $stmt->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $stmt->execute();
    }    
}