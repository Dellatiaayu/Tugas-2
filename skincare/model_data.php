<?php
include 'connection.php';
class Model extends connection {
    public function __construct(){
        $this->conn = $this->get_connection();
    }
    public function tampil_data(){
        $sql = "SELECT *FROM tbl_data";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()){
            $baris[] = $obj;
        } if (!empty($baris)){
            return $baris;
        }
    
    }
    public function edit($id){
        $sql = "SELECT * FROM tbl_data WHERE id_skincare='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update($id_skincare, $nm_skincare, $harga, $stok){
        $sql = "UPDATE tbl_data SET nm_skincare='$nm_skincare', harga='$harga', stok='$stok' WHERE id_skincare='$id_skincare'";
        $this->conn->query($sql);
    }
    public function delete($nim){
        $sql = "DELETE FROM tbl_data WHERE id_skincare='$id_skincare'";
        $this->conn->query($sql);
    }
    
}
?>