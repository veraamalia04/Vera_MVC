<?php
session_start();

require_once './controller/BahanController.php';
require_once './controller/KeranjangController.php';
require_once './controller/PembayaranController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Bahan';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($controller) {
    case 'Bahan':
        $obj = new BahanController();
        break;
    case 'Keranjang':
        $obj = new KeranjangController();
        break;
    case 'Pembayaran':
        $obj = new PembayaranController();
        break;
    default:
        die('Controller tidak ditemukan.');
}

if (method_exists($obj, $action)) {
    ob_start();
    $obj->$action();
    $viewContent = ob_get_clean();
} else {
    die('Action tidak ditemukan.');
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jamuku MVC</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <?= $viewContent ?>
    </div>
</body>
</html>
