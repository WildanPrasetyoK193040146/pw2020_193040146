<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("127.0.0.1" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "tubespw_193040146") or die("Database Salah!");
    
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

    $Gambar           = htmlspecialchars($data['Gambar']);
    $Code_barang           = htmlspecialchars($data['Code_barang']);
    $Merk   = htmlspecialchars($data['Merk']);
    $Jenis     = htmlspecialchars($data['Jenis']);
    $Harga         = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO elektronik
                VALUES 
                ('','$Gambar','$Code_barang','$Merk','$Jenis' , '$Harga')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
    

}

?>