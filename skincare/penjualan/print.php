<?php

include 'model.php';
$model = new model();
$index = 1;

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Cetak Data Penjualan Skincare</title>
        <style>
            h1 {
                text-align:center;
            }
            
            table,
            td,
            th {
                border:1px  solid #ddd;
                text-align: left;
            }
            
            table {
                border-collapse: collapse;
                width:100%;
            }
            
            th,
            td {
                padding: 15px;
            }
        </style>
    </head>
    
    <body>
        <h1>Laporan Data Penjualan Skincare</h1>
        <table>
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>ID Skincare</th>
                    <th>Nama Skincare</th>
                    <th>Harga</th>
                    <th>Pembeli</th>
                    <th>Jumlah Beli</th>
                    <th>Diskon</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_data();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->id_skincare ?></td>
                        <td><?= $data->nm_skincare ?></td>
                        <td><?= $data->harga ?></td>
                        <td><?= $data->pembeli ?></td>
                        <td><?= $data->jml_beli ?></td>
                        <td><?= $data->diskon ?></td>
                        <td><?= $data->total ?></td>
                    </tr>
                <?php endforeach;
                } else {
                    ?>
                    <tr>
                        <td colspan="9">Belun ada data pada tabel data penjualan skincare. </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
    </body>

</html>