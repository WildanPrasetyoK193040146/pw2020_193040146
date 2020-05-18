<?php

	// Array 1 dimensi
	
	$arah = array("kanan","kiri");

	$arah[2] = "atas";

	$arah[] = "bawah";

	// Menukar index
	
	$arah [1] = "kanan";
	$arah [0] = "kiri";


	echo "Panjang Array = ".count($arah);
	echo "<br>";
	print_r($arah);
	echo "<br>";
	echo $arah[2];

	for ($i=0; $i < count($arah) ; $i++) {
		echo "Arah = ".$arah[$i];
		echo "<br>"; 
		
	}

	echo "<br>";

	// Mencetak arah (dengan looping)

	foreach ($arah as $namaarah) {
		echo $namaarah;
	}

	// Array Multidimensi

	// $mahsiswa = array();
	// $mahasiswa[0][0]= "193040146";
	// $mahasiswa[0][1]= "Wildan Prasetyo K";
	// $mahasiswa[1][0]= "Karawang";
	// $mahasiswa[1][1]= "081281236556";

	// print("<prev>".print_r($mahasiswa,true)."</prev>");
	
	// print_r($mahasiswa);

	// echo "Nama :".$mahasiswa[0][1];
	// echo "<br>";
	// echo "kota :".$mahasiswa[1][0];

	// for ($i=0; $i < count($mahasiswa) ; $i++) { 
	//	for ($j=0; $j < 2; $j++) {
	//	echo $mahasiswa[$i][$j];
	//	echo "<br>"; 
			
	//	}
	// }

	// var_dump($mahasiswa);







?>