<h2>🛒 Keranjang Belanja</h2>

<?php if (empty($keranjang)): ?>
    <p>Keranjang masih kosong.</p>
<?php else: ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama Bahan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php
        $total = 0;
        foreach ($keranjang as $item):
            $subtotal = $item['harga'] * $item['jumlah'];
            $total += $subtotal;
        ?>
        <tr>
            <td><?= $item['nama'] ?></td>
            <td>Rp <?= number_format($item['harga']) ?></td>
            <td><?= $item['jumlah'] ?></td>
            <td>Rp <?= number_format($subtotal) ?></td>
            <td>
                <a href="index.php?controller=Keranjang&action=hapus&id=<?= $item['id'] ?>">🗑 Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" align="right"><strong>Total:</strong></td>
            <td colspan="2"><strong>Rp <?= number_format($total) ?></strong></td>
        </tr>
    </table>

    <br>
    <a href="index.php?controller=Pembayaran&action=form"><button>💳 Lanjut Pembayaran</button></a>
<?php endif; ?>
