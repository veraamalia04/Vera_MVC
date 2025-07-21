<?php
class Database {
    public static function connect() {
        $db = new PDO('sqlite:data/jamuku.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
