<!doctype html>
<html lang="en">


<head>
    <title>Tambah Data Penjualan Skincare</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>ID Skincare</label>
        <br>
        <input type="text" name="id_skincare">
        <br>
        <label>Nama Skincare</label>
        <br>
        <input type="text" name="nm_skincare">
        <br>
        <label>Harga</label>
        <br>
        <input type="number" name="harga">
        <br>
        <label>Pembeli</label>
        <br>
        <input type="text" name="pembeli">
        <br>
        <label>Jumlah Beli</label>
        <br>
        <input type="number" name="jml_beli">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset </button>
        
    </form>
</body>
</html>