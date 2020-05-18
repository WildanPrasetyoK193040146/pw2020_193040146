<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman login admin 
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// cek cookie 
if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    //ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' " );
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256' , $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// Login
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256' , $row['id'] , false);
            // jika remember me dicentang
            if(isset($_POST['remember'])) {
                setcookie('username' , $row['username'] , time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256' , $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>
<html>
    <head>
        <title>LOGIN</title>
<style>
.container{
    border-radius: 5px;
    font-family: Arial, Helvetica, sans-serif;
    width : 360px;
    text-align : center;
    position: relative;
    z-index: 1;
    background: #ffffff;
    max-width: 360px;
    margin: 150px auto 100px;
    padding: 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.container table input {
    background: #f2f2f2;
    width: 360px;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    font-size: 14px;
}
.container button {
    text-transform: uppercase;
    background: #03befc;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    cursor: pointer;
}
.container button:hover {
    background: #0373fc;
}
.container .registrasi {
    margin: 15px 0 0;
    color: #757575;
    font-size: 15px;
}
.container .registrasi a {
    color: #03befc;
    text-decoration: none;
}
.remember {
    float : left;
    margin-bottom : 20px;
    color: #b3b3b3;
    font-size: 15px;
}
.remember label , h3
{
    color : #757575;
}

    
</style>
    </head>
    <body>

        <form action="" method="post">
        
        <div class="container">
        <div class="form">
            <h3>LOGIN</h3>
            <table>
                <tr>
                    <!-- <td><label for="username">Username</label></td>
                    <td>:</td> -->
                    <td><input type="text" name="username" placeholder="username"></td>
                </tr>
                <tr>
                    <!-- <td><label for="password">Password</label></td>
                    <td>:</td> -->
                    <td><input type="password" name="password" placeholder="password"></td>
                </tr>
            </table>
            <div class="remember">
                <input type="checkbox" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <button type="submit" name="submit">Login</button>

            <?php if (isset($error)) : ?>
            <p style="color : red; font-style : italic; font-size : 12px;">Username Atau Password salah</p>
        <?php endif; ?>

        </div>
            <div class="registrasi">
                <p>Belum punya akun? Registrasi <a href="register.php">Disini</a> </p>
            </div>
        </div>

        </form>

    </body>
</html>