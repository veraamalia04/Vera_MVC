<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Bahan Jamu</title>
  <link rel="stylesheet" href="public/css/style.css"> 
</head>
<body>

  <h2>🧪 Daftar Bahan Jamu</h2>

  <div class="row">
    <?php foreach ($data as $bahan): ?>
      <div class="card">
        <h3><?= $bahan['nama'] ?></h3>
        <p><?= $bahan['deskripsi'] ?></p>
        <p><strong>Harga:</strong> Rp <?= number_format($bahan['harga']) ?></p>
        <a href="index.php?controller=Bahan&action=detail&id=<?= $bahan['id'] ?>">
          <button>Lihat Detail</button>
        </a>
        <a href="index.php?controller=Keranjang&action=tambah&id=<?= $bahan['id'] ?>">
          <button>Tambah ke Keranjang</button>
        </a>
      </div>
    <?php endforeach; ?>
  </div>

</body>
</html>
