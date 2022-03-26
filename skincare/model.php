<?php
include 'connection.php';
class model extends connection {
    public function __construct(){
        $this->conn = $this->get_connection();
    }
    public function insert($id_skincare, $nm_skincare, $harga, $pembeli, $jml_beli){
        $total = $this->total($jml_beli, $harga);
        $diskon = $this->diskon($diskon, $total, $jml_beli);
        $sql = "INSERT INTO tbl_penjualan (id_skincare, nm_skincare, harga, pembeli, jml_beli, diskon, total) VALUES ('$id_skincare', '$nm_skincare', '$harga', '$pembeli', '$jml_beli', '$diskon', '$tot')";
        $this->conn->query($sql);
    }
    public function total($harga, $jml_beli){
        $total = $jml_beli * $harga;
        return $total;
    }
    public function diskon($diskon, $total, $jml_beli){
        $diskon = 0;
        if ($jml_beli >=15){
            $diskon = $total * 0.15;
        } else if($jml_beli >=10){
            $diskon = $total * 0.10;
        }else if ($jml_beli >=5){
            $diskon = $total * 0.05;
        }else {
            $diskon = $total * 0;
        }
        $tot = $total - $diskon;
    }
    public function tampil_data(){
        $sql = "SELECT *FROM tbl_penjualan";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }if (!empty($baris)){
            return $baris;
        }
    
    }
    public function edit($id){
        $sql = "SELECT * FROM tbl_penjualan WHERE id_skincare='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update($id_skincare, $nm_skincare, $harga, $pembeli, $jml_beli, $diskon){
        $total = $this->na($harga, $jml_beli, $diskon);
        $sql = "UPDATE tbl_penjualan SET nm_skincare='$nm_skincare', harga='$harga', pembeli='$pembeli', jml_beli='$jml_beli', diskon='$diskon' WHERE id_skincare='$id_skincare'";
        $this->conn->query($sql);
    }
    public function delete($nim){
        $sql = "DELETE FROM tbl_penjualan WHERE id_skincare='$id_skincare'";
        $this->conn->query($sql);
    }
    
}
?>