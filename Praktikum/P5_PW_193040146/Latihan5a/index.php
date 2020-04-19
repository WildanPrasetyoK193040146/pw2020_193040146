<?php 
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
// memilih database
mysqli_select_db($conn, "tubespw_193040146") or die ("Database salah!");
// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM elektronik");
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
        <h3> Daftar Barang Elektronik</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Code Barang</th>
                <th>Merk</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php while ($i = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><img width="80px" src="Assets/img/<?= $i['Gambar']; ?>"></td>
                <td><?= $i["Code_barang"]; ?></td>
                <td><?= $i["Merk"]; ?></td>
                <td><?= $i["Jenis"]; ?></td>
                <td><?= $i["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
             <?php endwhile; ?>
        </table>
		
		<h5 align="center"></h5>
    </body>
</html>
