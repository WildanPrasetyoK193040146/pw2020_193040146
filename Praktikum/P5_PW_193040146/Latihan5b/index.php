<?php 
// menghubungkan dengan file php lainnya
require 'Assets/php/function.php';
// melakukan query
$result = query("SELECT * FROM elektronik")
?>

<html>
    <head>
        <title>Tugas_193040146</title>
    </head>
    <style>
        body {
            background-color: white;
        }
        table{
            background-color: white;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h5 a{
            text-decoration: none;
            color: black;
            font-size: 50px;
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: black;
        }
    </style>
    <body>
        <h3>Makanan</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Code Barang</th>
                <th>Merk</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($result as $i) { ?>
             <tr>
                <td><img width="80px" src="Assets/img/<?= $i['Gambar']; ?>"></td>
                <td><?= $i["Code_barang"]; ?></td>
                <td><?= $i["Merk"]; ?></td>
                <td><?= $i["Jenis"]; ?></td>
                <td><?= $i["Harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>
