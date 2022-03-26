<?php

$id = $_GET['id_skincare'];
include 'model.php';
$model = new model();
$data = $model->edit($id);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Skincare</title>
</head>

<body>
    <h1>Edit Data Skincare</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Skincare</label>
        <br>
        <input type="text" name="id_skincare" value="<?php echo $data->id_skincare ?>">
        <br>
        <label>Nama Skincare</label>
        <br>
        <input type="text" name="nm_skincare" value="<?php echo $data->nm_skincare ?>">
        <br>
        <label>Harga</label>
        <br>
        <input type="text" name="harga" value="<?php echo $data->harga ?>">
        <br>
        <label>Stok</label>
        <br>
        <input type="text" name="stok" value="<?php echo $data->stok ?>">
        <br>
        <label>Tugas</label>
        <br>
        <input type="text" name="tugas" value="<?php echo $data->tugas ?>">
        <br><br>
        
        <button type="submit" name="submit_edit">Submit</button>

    </form>
    
</body>
</html>