<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $result = query("SELECT * FROM elektronik");
   
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

    <div class="container">
        <?php foreach ($result as $rslt) : ?>
            <p class="Code_barang">
                <a href="php/detail.php?id=<?= $rslt['id'] ?>">
                    <?= $rslt["Code_barang"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>

</body>
</html>
