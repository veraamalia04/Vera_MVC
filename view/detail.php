<?php include 'view/layout/header.php'; ?>

<?php if ($item): ?>
    <h2><?= htmlspecialchars($item['nama']) ?></h2>
    <p><strong>Jenis:</strong> <?= htmlspecialchars($item['jenis']) ?></p>
    <p><?= htmlspecialchars($item['deskripsi']) ?></p>
    <p><strong>Harga:</strong> Rp <?= number_format($item['harga']) ?></p>
    <a href="index.php" class="btn">Kembali</a>
<?php else: ?>
    <p>Data tidak ditemukan.</p>
<?php endif; ?>

<?php include 'view/layout/footer.php'; ?>
