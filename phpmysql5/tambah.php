<?php
// koneksi ke dbms
// $dbconn = mysqli_connect("localhost", "root", "", "phpdasar");

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
// ambil data dari tiap form
    // $nama = $_POST["nama"];
    // $npm = $_POST["npm"];
    // $email = $_POST["email"];
    // $prodi = $_POST["prodi"];
    // $gambar = $_POST["gambar"];

    // query insert data
    // $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$prodi', '$gambar')";
    
    // mysqli_query($dbconn, $query);

    // if( mysqli_affected_rows($dbconn) > 0 ) {
    //     echo "Berhasil";
    // } else {
    //     echo "Gagal";
    //     echo "<br>";
    //     echo mysqli_error($dbconn);
    // }

    // cek apabila data berhasil masuk atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br>
            <li>
            <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <br>
            <li>
            <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <br>
            <li>
            <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi" required>
            </li>
            <br>
            <li>
            <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <br>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>

    </form>
    
</body>
</html>