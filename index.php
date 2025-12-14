<?php
require_once "Hewan.php";
$hewan = new Hewan();
$data = $hewan->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petshop | Data Hewan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container">
        <span class="navbar-brand h1">Petshop Website</span>
    </div>
</nav>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="text-center m-0">Daftar Hewan di Petshop</h4>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Hewan</th>
                        <th>Jenis</th>
                        <th>Umur</th>
                        <th>Makanan</th>
                        <th>Harga Hewan</th>
                        <th>Harga Obat</th>
                        <th>Harga Salon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $data->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['jenis']; ?></td>
                        <td><?= $row['umur']; ?> tahun</td>
                        <td><?= $row['makanan']; ?></td>
                        <td>Rp <?= number_format($row['harga_hewan']); ?></td>
                        <td>Rp <?= number_format($row['harga_obat']); ?></td>
                        <td>Rp <?= number_format($row['harga_salon']); ?></td>
                    </tr>

                    <th>Aksi</th>
                    <td>
    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapus.php?id=<?= $row['id']; ?>" 
       onclick="return confirm('Hapus data?')"
       class="btn btn-danger btn-sm">Hapus</a>
</td>



                    <?php endwhile; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
