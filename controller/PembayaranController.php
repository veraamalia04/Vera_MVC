<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class PembayaranController {
    public function form() {
        $keranjang = $_SESSION['keranjang'] ?? [];

        if (empty($keranjang)) {
            echo "Keranjang kosong. <a href='index.php'>Kembali</a>";
            return;
        }

        include './view/pembayaran/form.php';
    }

    public function proses() {
        unset($_SESSION['keranjang']); 
        echo "<h2>Pembayaran berhasil!</h2>";
        echo "<a href='index.php'>Kembali ke Beranda</a>";
    }
}
