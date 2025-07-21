<?php
class Pembayaran {
    private $db;

    public function __construct() {
        $this->db = new SQLite3('./data/database.db');
    }

    public function simpan($total, $tanggal) {
        $stmt = $this->db->prepare("INSERT INTO pembayaran (total, tanggal) VALUES (:total, :tanggal)");
        $stmt->bindValue(':total', $total, SQLITE3_INTEGER);
        $stmt->bindValue(':tanggal', $tanggal, SQLITE3_TEXT);
        $stmt->execute();
    }
}
?>
