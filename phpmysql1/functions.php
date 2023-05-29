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
?>