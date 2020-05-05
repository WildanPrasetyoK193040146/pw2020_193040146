<?php
// menghubungkan dengan file php lainya
require 'functions.php';
// melakukan query
$result = query ( "SELECT * FROM  elektronik" );

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $result = query("SELECT * FROM elektronik WHERE
                Gambar LIKE '%$keyword%' OR
                Code_barang LIKE '%$keyword%' OR
                Merk LIKE '%$keyword%' OR
                Jenis LIKE '%$keyword%' OR
                Harga LIKE '%$keyword%'  ");
} else {
    $result = query("SELECT * FROM elektronik");
}


?>

<html>
<head>
    <title>Latihan7b</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div> 
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
        <button type="submit"><a href="../index.php" style="text-decoration : none; color : black;">Kembali</a></button>
    </form>

   


    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Code Barang</th>
            <th>Merk</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>


    <?php if(empty($result)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
        </td>
    </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($result as $rslt) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $rslt['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $rslt['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $rslt['Gambar']?>" alt=""></td>
                <td><?= $rslt['Code_barang']?></td>
                <td><?= $rslt['Merk']?></td>
                <td><?= $rslt['Jenis']?></td>
                <td><?= $rslt['Harga']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    <?php endif;?>
    </table>

</body>
</html>