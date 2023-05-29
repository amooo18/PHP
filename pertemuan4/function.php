<?php
function salam($waktu, $nama) {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Hilman"); ?></h1>
</body>
</html>