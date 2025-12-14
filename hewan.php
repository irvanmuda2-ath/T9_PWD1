<?php
require_once "config.php";

class Hewan {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $query = "SELECT * FROM hewan";
        return $this->db->conn->query($query);
    }

    public function insert($nama, $jenis, $umur, $makanan, $harga_hewan, $harga_obat, $harga_salon) {
        $query = "INSERT INTO hewan 
            (nama, jenis, umur, makanan, harga_hewan, harga_obat, harga_salon)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param(
            "ssisiii",
            $nama,
            $jenis,
            $umur,
            $makanan,
            $harga_hewan,
            $harga_obat,
            $harga_salon
        );

        return $stmt->execute();
    }

    public function getById($id) {
        $query = "SELECT * FROM hewan WHERE id = ?";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function update($id, $nama, $jenis, $umur, $makanan, $harga_hewan, $harga_obat, $harga_salon) {
        $query = "UPDATE hewan SET 
            nama = ?, 
            jenis = ?, 
            umur = ?, 
            makanan = ?, 
            harga_hewan = ?, 
            harga_obat = ?, 
            harga_salon = ?
            WHERE id = ?";

        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param(
            "ssisiiii",
            $nama,
            $jenis,
            $umur,
            $makanan,
            $harga_hewan,
            $harga_obat,
            $harga_salon,
            $id
        );

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM hewan WHERE id = ?";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>

