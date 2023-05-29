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


function ubah($data) {
global $dbconn;


    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                npm = '$npm',
                email = '$email',
                prodi = '$prodi',
                gambar = '$gambar'
                WHERE id = $id
                ";
    
    mysqli_query($dbconn, $query);

    return mysqli_affected_rows($dbconn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE '%$keyword%' OR
    npm LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    prodi LIKE '%$keyword%'";

return query ($query);
}



?>