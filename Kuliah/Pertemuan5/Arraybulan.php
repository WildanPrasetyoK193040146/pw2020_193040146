<?php

$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

$angka = array(5,2,6,4,3,1);

$hasil = array_pop($bulan);

echo "<hr>";

$hasil = array_push($angka, 10,"Sembilan",8,7);

echo "<hr>";

$hasil = rsort($angka);
print_r($angka);
echo("<hr>");

$hasil = sort($angka);
print_r($angka);


?>