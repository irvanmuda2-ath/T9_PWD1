<?php
require_once "Hewan.php";
$hewan = new Hewan();

$id = $_GET['id'];
$data = $hewan->getById($id)->fetch_assoc();

if (isset($_POST['update'])) {
    $hewan->update(
        $id,
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
    Nama <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Jenis <input type="text" name="jenis" value="<?= $data['jenis'] ?>"><br>
    Umur <input type="number" name="umur" value="<?= $data['umur'] ?>"><br>
    Makanan <input type="text" name="makanan" value="<?= $data['makanan'] ?>"><br>
    Harga Hewan <input type="number" name="harga_hewan" value="<?= $data['harga_hewan'] ?>"><br>
    Harga Obat <input type="number" name="harga_obat" value="<?= $data['harga_obat'] ?>"><br>
    Harga Salon <input type="number" name="harga_salon" value="<?= $data['harga_salon'] ?>"><br>
    <button name="update">Update</button>
</form>
