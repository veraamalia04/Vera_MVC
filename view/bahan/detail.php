<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Bahan</title>
  <link rel="stylesheet" href="public/css/style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fafafa;
      padding: 30px;
      color: #333;
    }

    h2 {
      color: #444;
      margin-bottom: 20px;
    }

    .detail-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      max-width: 500px;
    }

    .detail-box p {
      margin-bottom: 12px;
      font-size: 16px;
    }

    .detail-box strong {
      color: #2a9d8f;
    }

    .btn-group {
      margin-top: 20px;
    }

    .btn-group a button {
      background-color: #2a9d8f;
      color: #fff;
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-right: 10px;
      transition: background-color 0.3s;
    }

    .btn-group a button:hover {
      background-color: #21867a;
    }

    .notfound {
      font-style: italic;
      color: #999;
    }
  </style>
</head>
<body>

<h2>🔍 Detail Bahan</h2>

<?php if ($bahan): ?>
  <div class="detail-box">
    <p><strong>Nama:</strong> <?= $bahan['nama'] ?></p>
    <p><strong>Deskripsi:</strong> <?= $bahan['deskripsi'] ?></p>
    <p><strong>Harga:</strong> Rp <?= number_format($bahan['harga']) ?></p>

    <div class="btn-group">
      <a href="index.php?controller=Keranjang&action=tambah&id=<?= $bahan['id'] ?>">
        <button>➕ Tambah ke Keranjang</button>
      </a>
      <a href="index.php">
        <button>🔙 Kembali</button>
      </a>
    </div>
  </div>
<?php else: ?>
  <p class="notfound">❗ Bahan tidak ditemukan.</p>
<?php endif; ?>

</body>
</html>