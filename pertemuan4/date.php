<?php
// date menampilkan tanggal
// echo date("l, d-m-y");

// time/waktu
// UNIX timestamp/EPOCH time
// echo time();
// echo date("l", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,4,18,1998));

// strtotime
echo date("l", strtotime("18 apr 1998"));


?>