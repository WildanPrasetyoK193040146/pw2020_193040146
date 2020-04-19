<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'function.php';

    $id = $_GET['id'];

    $i = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>Tugas_193040146</title>



        <link rel="stylesheet" href="../css/style.css">

    </head>

<body>
<div class="container">
        <div class="photo">
            <img src="../assets/img/<?= $i["Gambar"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $i["Code_barang"]; ?></p>
                <p><?= $i["Merk"]; ?></p>
                <p><?= $i["Jenis"]; ?></p>
                <p><?= $i["Harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">Back</a> </button>
    </div>
</body>
</html>
