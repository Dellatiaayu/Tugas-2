<?php
include 'connection.php';
class model extends connection {
    public function __construct(){
        $this->conn = $this->get_connection();
    }
    public function insert($id_skincare, $nm_skincare, $harga, $pembeli, $jml_beli){
        $diskon = $this->diskon($jml_beli)
        $total = $this->total($harga, $jml_beli, $diskon);
        $sql = "INSERT INTO tbl_penjualan (id_skincare, nm_skincare, harga, pembeli, jml_beli, diskon, total) VALUES ('$id_skincare', '$nm_skincare', '$harga', '$pembeli', '$jml_beli', '$diskon', '$total')";
        $this->conn->query($sql);
    }
    public function na($harga, $jml_beli, $diskon){
        $total = (0.3 * $uts) + (0.3 * $tugas) + (0.4 * $uas);
        return $diskon;
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