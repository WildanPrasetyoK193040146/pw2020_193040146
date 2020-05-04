<?php
    require 'functions.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Tambah Data Barang Elektronik</h3>
<form action="" method="post">
    <ul>
    <li>
            <label for="Gambar">Gambar : </label><br>
            <input type="text" name = "Gambar" id="Gambar" required><br><br>
        </li>
        <li>
            <label for="Code_barang">Code Barang : </label><br>
            <input type="text" name = "Code_barang" id="Code_barang" required><br><br>
        </li>
        <li>
            <label for="Merk">Merk : </label><br>
            <input type="text" name = "Merk" id="Merk" required><br><br>
        </li>
        <li>
            <label for="Jenis">Jenis : </label><br>
            <input type="text" name = "Jenis" id="Jenis" required><br><br>
        </li>
        <li>
            <label for="Harga">Harga : </label><br>
            <input type="text" name = "Harga" id="Harga" required><br><br>
        </li>
            <br>
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
    </ul>
</form>