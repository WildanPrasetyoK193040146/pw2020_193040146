<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("127.0.0.1" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "tubespw_193040146") or die("Database Salahaaaa!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $Gambar             = htmlspecialchars($data['Gambar']);
    $Code_barang        = htmlspecialchars($data['Code_barang']);
    $Merk               = htmlspecialchars($data['Merk']);
    $Jenis              = htmlspecialchars($data['Jenis']);
    $Harga              = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO elektronik
                VALUES 
                ('','$Gambar','$Code_barang','$Merk','$Jenis' , '$Harga')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id                  = $data['id'];
    $Gambar              = htmlspecialchars($data['Gambar']);
    $Code_barang         = htmlspecialchars($data['Code_barang']);
    $Merk                = htmlspecialchars($data['Merk']);
    $Jenis               = htmlspecialchars($data['Jenis']);
    $Harga               = htmlspecialchars($data['Harga']);

    $query = "UPDATE elektronik SET
            Gambar = '$Gambar',
            Code_barang = '$Code_barang',
            Merk = '$Merk',
            Jenis = '$Jenis',
            Harga = '$Harga'
            WHERE id = $id
    ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}


// fungctions untuk registrasi
function registrasi($data){
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES ('' , '$username' , '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}



?>