<?php


function HitungLuasLingkaran($jari) {
	$luas = 3.14*$jari*$jari;
	return $luas;
}
function HitungLuas2Lingkaran($luas1, $luas2){
	$total_luas_lingkaran = $luas1*$luas2;
	return $total_luas_lingkaran;
}

$jari1 = 2;
$jari2 = 4;

$luas_lingkaran1 = HitungLuasLingkaran($jari1);
$luas_lingkaran2 = HitungLuasLingkaran($jari2);

echo "Total Luas Lingkaran = ".HitungLuas2Lingkaran($luas_lingkaran1,$luas_lingkaran2);

?>