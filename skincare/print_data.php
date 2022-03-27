<?php

include 'model_data.php';
$model = new Model();
$index = 1;

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Cetak Data Skincare</title>
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
        <h1>Laporan Data Skincare</h1>
        <table>
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>ID Skincare</th>
                    <th>Nama Skincare</th>
                    <th>Harga</th>
                    <th>Stok</th>
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
                    </tr>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
    </body>

</html>