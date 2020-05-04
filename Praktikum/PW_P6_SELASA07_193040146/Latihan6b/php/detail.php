<?php
//mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET["id"])) {
    header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang mengambil dari url
$result  = query("SELECT * FROM elektronik WHERE id = $id")[0];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $result["Gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $result['Code_barang'] ?></p>
            <p><?= $result['Merk'] ?></p>
            <p><?= $result['Jenis'] ?></p>
            <p><?= $result['Harga'] ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>