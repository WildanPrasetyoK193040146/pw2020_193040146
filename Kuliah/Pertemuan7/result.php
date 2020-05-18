<?php

	// echo "Wildan Ganteng";
	// 	echo "<hr>";

	echo "Username : ".$_GET['username'];
	echo "<br>";
	echo "Password : ".$_GET['password'];
	function ceklogin($username, $password) {
		if ($username == "Wildan Ganteng" && $password == "193040146") {
				echo "Berhasil Login yah";
		} else {
			echo "Yah gagal Login";
		}
	}


	// Eksekusi
	// ______________________
	// ________________________________
	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username, $password);
?>