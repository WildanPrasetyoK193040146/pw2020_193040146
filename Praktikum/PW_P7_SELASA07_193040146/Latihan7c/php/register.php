<?php

require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0 ){
    echo "
        <script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('Registrasi Gagal');
            </script>
        ";
    }
}

?>
<html>
    <head>
        <title>LOGIN</title>
<style>
.container{
    border-radius : 5px;
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
    margin-bottom : 10px;
}
.container button:hover {
    background:#0373fc;
}

.back{
    float : left;
    color: #757575;
    font-size: 15px;
    text-decoration : none;
}
.back:hover{
    color:#03befc;
}
h3{
    color : #757575;
}


    
</style>
    </head>
    <body>

<div class="container">
<form action="" method="post">
    <h3>DAFTAR</h3>
    <table>
        <tr>
            <!-- <td><label for="username">username</label></td>
            <td>:</td> -->
            <td><input type="text" name="username" placeholder="username"></td>
        </tr>
        <tr>
            <!-- <td><label for="password">password</label></td>
            <td>:</td> -->
            <td><input type="password" name="password" placeholder="password"></td>
        </tr>
    </table>
    <button type="submit" name="register">REGISTER</button>
    <br>
    <a href="admin.php" class="back">Back to login page</a>
</form>
</div>
</body>
</html>