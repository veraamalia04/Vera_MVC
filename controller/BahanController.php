<?php
require_once './model/Bahan.php';

class BahanController {
    public function index() {
        $model = new Bahan();
        $data = $model->getAll();
        include './view/bahan/index.php';
    }

    public function detail() {
        $id = $_GET['id'];
        $model = new Bahan();
        $bahan = $model->getById($id);
        include './view/bahan/detail.php';
    }
}
