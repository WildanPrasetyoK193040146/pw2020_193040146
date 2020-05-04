<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $result = query("SELECT * FROM elektronik");

    // Tugas no 2
    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $result = query("SELECT * FROM elektronik WHERE
                    foto LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    sumber_bunyi LIKE '%$keyword%' OR
                    Cara_pakai LIKE '%$keyword%' OR
                    fungsi LIKE '%$keyword%'  ");
    } else {
        $result = query("SELECT * FROM elektronik");
    }


   
?>

<html>
<head>
    <title>Tugas</title>
    <style>
        img{ width:150px; padding:20px; }
        td{ text-align : center; }
    </style>
</head>
<body>


    <!-- Tugas No 2 : Tambahkan kolom pencarian pada halaman front-end(index) dari web kalian.   -->

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>




    <?php if(empty($result)) : ?>
    <div>
            <h1>Data Tidak Ditemukan</h1>
    </div>
    <?php else : ?>
        <div class="container">
            <?php foreach ($result as $rslt) : ?>
                <p class="Code_barang">
                    <a href="php/detail.php?id=<?= $rslt['id'] ?>">
                        <?= $rslt["Code_barang"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
        <?php endif;?>

    <a href="php/admin.php" style="color:green;">   KE HALAMAN ADMIN</a>

</body>
</html>