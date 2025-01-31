<?php
namespace Senac\SistemaDeMencoes\Models;

use Senac\SistemaDeMencoes\Config\Database;

class TipoUsuario {
    private $id;
    private $tipo;

    // Construtor
    public function __construct($tipo, $id = null) {
        $this->id = $id;
        $this->tipo = $tipo;
    }

    // Métodos de acesso (getters e setters)
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    // Método para salvar (inserir ou atualizar) no banco de dados
    public function save() {
        $pdo = Database::getConnection();

        if ($this->id) {
            // Atualizar
            $stmt = $pdo->prepare("UPDATE tipo_usuario SET tipo = ? WHERE id = ?");
            $stmt->execute([$this->tipo, $this->id]);
        } else {
            // Inserir
            $stmt = $pdo->prepare("INSERT INTO tipo_usuario (tipo) VALUES (?)");
            $stmt->execute([$this->tipo]);
            $this->id = $pdo->lastInsertId(); // Definindo o ID gerado automaticamente
        }
    }

    // Método para buscar um tipo por ID
    public static function findById($id) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM tipo_usuario WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch($pdo::FETCH_ASSOC);

        if ($row) {
            return new TipoUsuario($row['tipo'], $row['id']);
        }

        return null;
    }

    // Método para excluir
    public function delete() {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("DELETE FROM tipo_usuario WHERE id = ?");
        $stmt->execute([$this->id]);
    }
}
