<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Keranjang Belanja</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fefae0;
      padding: 40px;
      color: #333;
    }

    h2 {
      text-align: center;
      color: #bc6c25;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 14px 20px;
      text-align: center;
    }

    th {
      background-color: #606c38;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f0efeb;
    }

    a.btn-hapus {
      color: #d00000;
      text-decoration: none;
      font-weight: bold;
    }

    a.btn-hapus:hover {
      text-decoration: underline;
    }

    .total {
      font-weight: bold;
      background-color: #e9edc9;
    }

    .btn-bayar {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background-color: #283618;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
      text-align: center;
    }

    .btn-bayar:hover {
      background-color: #1b1b1b;
    }

    .kosong {
      text-align: center;
      font-style: italic;
      color: #888;
    }
  </style>
</head>
<body>

<h2>🛒 Keranjang Belanja</h2>

<?php if (empty($keranjang)) : ?>
  <p class="kosong">Keranjang kamu masih kosong.</p>
<?php else : ?>
  <table>
    <tr>
      <th>Nama Bahan</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
    <?php $total = 0; ?>
    <?php foreach ($keranjang as $item): ?>
      <tr>
        <td><?= $item['nama'] ?></td>
        <td>Rp<?= number_format($item['harga']) ?></td>
        <td><?= $item['jumlah'] ?></td>
        <td>Rp<?= number_format($item['harga'] * $item['jumlah']) ?></td>
        <td><a class="btn-hapus" href="index.php?page=keranjang&aksi=hapus&id=<?= $item['id'] ?>">❌ Hapus</a></td>
      </tr>
      <?php $total += $item['harga'] * $item['jumlah']; ?>
    <?php endforeach; ?>
    <tr class="total">
      <td colspan="3">Total Bayar</td>
      <td colspan="2">Rp<?= number_format($total) ?></td>
    </tr>
  </table>

  <div style="text-align: center;">
    <a class="btn-bayar" href="index.php?page=pembayaran">💳 Lanjut ke Pembayaran</a>
  </div>
<?php endif; ?>

</body>
</html>
