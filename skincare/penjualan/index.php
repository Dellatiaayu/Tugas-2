<?php

include 'model.php';
$model = new model();
$index = 1;

?>

<!doctype html>
<html lang="en">
    
<head>
    <title>Data Penjualan Skincare</title>
</head>

<body>
    <div>
        <h1>Data Penjualan Skincare</h1>
        <a href="create.php">Tambah Data Penjualan</a>
        <br><br>
        <a href="print.php" target="_blank">Cetak Data Penjualan Skincare</a>
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Skincare</th>
                    <th>Nama Skincare</th>
                    <th>Harga</th>
                    <th>Pembeli</th>
                    <th>Jumlah Beli</th>
                    <th>Diskon</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $result = $model->tampil_data_penjualan();
                if (empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->id_skincare ?> </td>
                        <td><?= $data->nm_skincare ?> </td>
                        <td><?= $data->harga ?> </td>
                        <td><?= $data->pembeli ?> </td>
                        <td>
                        <td><?= $data->jml_beli ?> </td>
                        <td>
                        <td><?= $data->diskon ?> </td>
                        <td>
                        <td><?= $data->total ?> </td>
                        <td>
                            <a name="edit" id="edit" href="edit.php?id_skincare=<? $data->id_skincare ?>">Edit</a>
                            <a name="hapus" id="hapus" href="proces_data.php?id_skincare=<? $data->id_skincare ?>">Delete</a>
                            
                        </td>
                    </tr>
                    
                <?php endforeach;}
                else { ?>
                    <tr>
                        <td colspan="9">Belum ada data pada tabel data penjualan skincare. </td>
                    </tr>
                <?php }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>