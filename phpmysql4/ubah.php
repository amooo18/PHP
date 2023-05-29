<?php

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id 
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apabila data berhasil mdiubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name='id' value='<?= $mhs["id"]?>'>
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <br>
            <li>
            <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
            </li>
            <br>
            <li>
            <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <br>
            <li>
            <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi" required value="<?= $mhs["prodi"]; ?>">
            </li>
            <br>
            <li>
            <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
            </li>
            <br>
            <button type="submit" name="submit">Ubah Data</button>
        </ul>

    </form>
    
</body>
</html>