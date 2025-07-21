<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class RacikanController {
    public function index() {
        $keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : [];
        include './view/racikan.php';
    }

    public function simpan() {
        $_SESSION['racikan_terakhir'] = $_SESSION['keranjang'];
        $_SESSION['keranjang'] = [];
        header('Location: index.php?controller=Racikan&action=index');
    }
}
?>
