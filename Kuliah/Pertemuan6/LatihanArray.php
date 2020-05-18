<?php 

	// array associative menggunakan tipe string
	$mahasiswa = array(
	"nama" => "Wildan", 
	"nrp" => "193040146",
	"alamat" => "Karawang",
	"usia" => "19 tahun");
	echo $mahasiswa["nama"];
	print_r($mahasiswa);
	echo "<hr>";

	// array biasa menggunakan index 1,2,3
	$mahasiswa = array(
	"Wildan", "193040146", "Karawang",
	"19 tahun" );
	echo $mahasiswa[0];
	print_r($mahasiswa);

?>