<?php
// array
// variabel yang dapat menampung banyak nilai

// cara lama
$hari = array("senin", "selasa", "rabu");

//  cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// gunakan var_dump/print_r
// var_dump($hari);
// echo"<br>";
// print_r($bulan);
// echo"<br>";

// menampilkan satu elemen saja
// echo $arr1[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);


?>