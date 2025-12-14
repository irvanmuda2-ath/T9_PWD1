<?php
require_once "Hewan.php";
$hewan = new Hewan();

if (isset($_POST['simpan'])) {
    $hewan->insert(
        $_POST['nama'],
        $_POST['jenis'],
        $_POST['umur'],
        $_POST['makanan'],
        $_POST['harga_hewan'],
        $_POST['harga_obat'],
        $_POST['harga_salon']
    );
    header("Location: index.php");
}
?>

<form method="post">
    Nama Hewan <input type="text" name="nama" required><br>
    Jenis <input type="text" name="jenis"><br>
    Umur <input type="number" name="umur"><br>
    Makanan <input type="text" name="makanan"><br>
    Harga Hewan <input type="number" name="harga_hewan"><br>
    Harga Obat <input type="number" name="harga_obat"><br>
    Harga Salon <input type="number" name="harga_salon"><br>
    <button name="simpan">Simpan</button>
</form>
