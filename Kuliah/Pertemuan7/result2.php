<?php

	function cekjumlah($Nomor1,$Nomor2) {
		$Hasilnya = $Nomor1 + $Nomor2 ;
		return $Hasilnya;
	}

	$Nomor1 = $_GET['Nomor1'];
	$Nomor2 = $_GET['Nomor2'];

	echo "Hasil Dari Penjumlahan : ".cekjumlah($Nomor1,$Nomor2);



?>