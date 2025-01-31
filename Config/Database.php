<?php
namespace Senac\SistemaDeMencoes\Config;

use PDO;
use PDOException;

class Database {
    private static $pdo;

    public static function getConnection() {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO('mysql:host=localhost;dbname=bd_mencoes', 'root', '123456');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
