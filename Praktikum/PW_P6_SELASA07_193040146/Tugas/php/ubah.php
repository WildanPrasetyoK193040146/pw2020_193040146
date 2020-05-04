<?php
    require 'functions.php';

    // ambil id dari url admin.php
    $id = $_GET['id'];

    //query mahasiswa berdasarkan id
    $result = query("SELECT * FROM elektronik WHERE id = $id")[0];
    // var_dump($rslt);

    //memastikan kalau tombol ubah sudah ditekan
    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Ubah Data Barang Elektronik</h3>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $result['id']?>">
    <ul>
        <li>    
            <label for="gambar">Gambar : </label><br>
            <input type="text" name = "gambar" id="gambar"  required value="<?= $result['gambar']?>" ><br><br>
        </li>
        <li>    
            <label for="Code_barang">Code Barang : </label><br>
            <input type="text" name = "Code_barang" id="Code_barang"  required value="<?= $result['Code_barang']?>" ><br><br>
        </li><li>    
            <label for="Merk">Merk : </label><br>
            <input type="text" name = "Merk" id="Merk"  required value="<?= $result['Merk']?>" ><br><br>
        </li><li>    
            <label for="Jenis">Jenis : </label><br>
            <input type="text" name = "Jenis" id="Jenis"  required value="<?= $result['Jenis']?>" ><br><br>
        </li>
        <li>    
            <label for="Harga">Harga : </label><br>
            <input type="text" name = "Harga" id="Harga"  required value="<?= $result['Harga']?>" ><br><br>
        </li>
        <li>
            <br>
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>