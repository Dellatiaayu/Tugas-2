<?php

include 'model_data.php';
$model = new Model();
$index = 1;

?>

<!doctype html>
<html lang="en">
    
<head>
    <title>Data Skincare</title>
</head>

<body>
    <div>
        <h1>Data Skincare</h1>
        <a href="create_data.php">Tambah Data</a>
        <br><br>
        <a href="print_data.php" target="_blank">Cetak Data Skincare</a>
        <br><br>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Skincare</th>
                    <th>Nama Skincare</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $result = $model->tampil_data(); ?>
                    <tr>
                        <td><?php $index++ ?></td>
                        <td><?php $id_skincare ?> </td>
                        <td><?php $nm_skincare ?> </td>
                        <td><?php $harga ?> </td>
                        <td><?php $stok ?> </td>
                        <td>
                            <a name="edit" id="edit" href="edit_data.php?id_skincare=<?= $data->id_skincare ?>">Edit</a>
                            <a name="hapus" id="hapus" href="proces_data.php?id_skincare=<?= $data->id_skincare ?>">Delete</a>
                            
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>