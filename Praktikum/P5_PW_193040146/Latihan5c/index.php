<?php 
// menghubungkan dengan file php lainnya
require 'php/function.php';
// melakukan query
$result = query("SELECT * FROM elektronik")
?>
<html>
    <head>
        <title> Daftar Barang Elektronik</title>
    </head>
    <body>
        <div class="container">
        <?php foreach ($result as $i) :?>
            <p class="Code Barang">
                 <a href="php/detail.php?id=<?= $i['id'] ?>">
                    <?= $i["Code_barang"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        </div>
    </body>
</html>
