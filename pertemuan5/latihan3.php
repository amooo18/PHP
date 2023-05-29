<?php
$mahasiswa = [
    ["Muhamad Hilman", "16210010", "Teknologi Informasi", "mhilman1497@gmail.com"], ["Kasmo", "16210011", "Teknologi Informasi", "kasmo1497@gmail.com"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NPM : <?= $mhs[1]; ?></li>
    <li>Prodi : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>

    <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
        <li><?php echo $mhs; ?></li>
    <?php endforeach; ?> -->
    <!-- <li>Muhamad Hilman</li>
    <li>16210010</li>
    <li>Teknologi Informasi</li>
    <li>mhilman1497@gmail.com</li> -->
</ul>
<?php endforeach; ?>


    
</body>
</html>