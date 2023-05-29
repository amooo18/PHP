<?php
// koneksi ke database
$dbconn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $dbconn;
    $result = mysqli_query($dbconn, $query);
    $row = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}


function tambah($data) {
global $dbconn;

    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$prodi', '$gambar')";
    
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}


function hapus($id) {
    global $dbconn;
    mysqli_query($dbconn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($dbconn);
}



?>