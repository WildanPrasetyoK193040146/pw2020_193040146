<?php

// menghubungkan dengan file php lainya
require 'functions.php';

// melakukan query
$result = query ( "SELECT * FROM  elektronik" );

?>

<html>
<head>
    <title>Latihan6a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Code Barang</th>
            <th>Merk</th>
            <th>Jenis</th>
            <th>Harga</th>
            
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($result as $rslt) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $rslt['Gambar']?>" alt=""></td>
                <td><?= $rslt['Code_barang']?></td>
                <td><?= $rslt['Merk']?></td>
                <td><?= $rslt['Jenis']?></td>
                <td><?= $rslt['Harga']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>