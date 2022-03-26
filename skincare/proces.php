<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
    $id_skincare = $_POST['id_skincare'];
    $nm_skincare = $_POST['nm_skincare'];
    $harga = $_POST['harga'];
    $pembeli = $_POST['$pembeli'];
    $jml_beli= $_POST['jml_beli'];
    $model = new model();
    $model->insert($id_skincare, $nm_skincare, $harga, $pembeli, $jml_beli);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
    $id_skincare = $_POST['id_skincare'];
    $nm_skincare = $_POST['nm_skincare'];
    $harga = $_POST['harga'];
    $pembeli = $_POST['pembeli'];
    $jml_beli = $_POST['jml_beli'];
    $model = new model();
    $model->update($id_skincare, $nm_skincare, $harga, $pembeli, $jml_beli);
    header('location:index.php');
}
if (isset($_GET['id_skincare'])) {
    $id = $_GET['id_skincare'];
    $model->delete($id);
    header('location:index.php');
}
?>