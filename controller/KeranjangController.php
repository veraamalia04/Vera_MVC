<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once './model/Bahan.php';

class KeranjangController {
    public function index() {
        $keranjang = $_SESSION['keranjang'] ?? [];
        include './view/keranjang/index.php'; 
    }

    public function tambah() {
        $id = $_GET['id'] ?? 0;

        $bahanModel = new Bahan();
        $bahan = $bahanModel->getById($id);

        if (!$bahan) {
            echo "Bahan tidak ditemukan!";
            return;
        }

        if (!isset($_SESSION['keranjang'][$id])) {
            $_SESSION['keranjang'][$id] = [
                'id' => $id,
                'nama' => $bahan['nama'],
                'harga' => $bahan['harga'],
                'jumlah' => 1
            ];
        } else {
            $_SESSION['keranjang'][$id]['jumlah']++;
        }

        header("Location: index.php?controller=Keranjang&action=index");
    }

    public function hapus() {
        $id = $_GET['id'] ?? 0;
        unset($_SESSION['keranjang'][$id]);
        header("Location: index.php?controller=Keranjang&action=index");
    }
}
