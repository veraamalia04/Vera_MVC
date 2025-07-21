<?php
require_once 'config/database.php';

class Bahan {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM bahan");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM bahan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
