<?php
$mahasiswa = [
    ["Muhamad  Hilman", "16210010", "mhilman1497@gmail.com", "Teknologi Informasi"], ["kasmo", "16210011", "man1497@gmail.com", "Teknologi Informasi"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ): ?>
        <ul>
            <li>
                <img src="logo.png">
            </li>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NPM: <?= $mhs[1]; ?></li>
            <li>Email: <?= $mhs[2]; ?></li>
            <li>Prodi: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>