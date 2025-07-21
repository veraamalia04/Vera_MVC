<h2>💳 Form Pembayaran</h2>

<form action="index.php?controller=Pembayaran&action=proses" method="post">
    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Metode Pembayaran:</label><br>
    <select name="metode">
        <option value="transfer">Transfer Bank</option>
        <option value="cod">Bayar di Tempat</option>
    </select><br><br>

    <button type="submit">Bayar Sekarang</button>
</form>
