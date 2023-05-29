<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
        </td>
        <td><img src="<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["npm"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["prodi"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
    
</body>
</html>