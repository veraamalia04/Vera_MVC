<?php include 'view/layout/header.php'; ?>

<h2>Daftar Bahan Jamu</h2>
<div class="grid">
    <?php foreach ($data as $bahan): ?>
    <div class="card">
        <h3><?= htmlspecialchars($bahan['nama']) ?></h3>
        <p><?= htmlspecialchars($bahan['deskripsi']) ?></p>
        <p><strong>Harga:</strong> Rp <?= number_format($bahan['harga']) ?></p>
        <a href="index.php?page=detail&id=<?= $bahan['id'] ?>" class="btn">Lihat Detail</a>
        <a href="index.php?controller=Keranjang&action=tambah&id=<?= $bahan['id'] ?>" class="btn btn-secondary">
            Tambah ke Keranjang
        </a>
    </div>

    <div class="btn-group">
        <a href="index.php?page=detail&id=<?= $bahan['id'] ?>" class="btn">Lihat Detail</a>
        <a href="index.php?controller=Keranjang&action=tambah&id=<?= $bahan['id'] ?>" class="btn btn-secondary">Tambah ke Keranjang</a>
    </div>
    <?php endforeach; ?>
</div>

<?php include 'view/layout/footer.php'; ?>
