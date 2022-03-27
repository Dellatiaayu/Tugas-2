<?php
include 'model_data.php';
if (isset($_POST['submit_simpan'])) {
    $id_skincare = $_POST['id_skincare'];
    $nm_skincare = $_POST['nm_skincare'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $model = new Model();
    return $model;
    header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
    $id_skincare = $_POST['id_skincare'];
    $nm_skincare = $_POST['nm_skincare'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $model = new Model();
    $model->update($id_skincare, $nm_skincare, $harga, $stok);
    header('location:index.php');
}
if (isset($_GET['id_skincare'])) {
    $id = $_GET['id_skincare'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}
?>