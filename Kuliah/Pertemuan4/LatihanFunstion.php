<?php 

$lirik =
"Naik kereta api… tut … tut … tut<br>
Siapa hendak turut<br>
Ke Bandung … Surabaya<br>
Bolehlah naik dengan percuma<br>
Ayo kawanku lekas naik<br>
Keretaku tak berhenti lama<br>
Lekas kretaku jalan …tut…tut…tut<br>
Banyak penumpang turut<br>
K'retaku sudah penat<br>
Karena beban terlalu berat<br>
Di sinilah ada stasiun<br>
Penumpang semua turun";


$lirik = str_replace("a", "o", $lirik);
$lirik = str_replace("i", "o", $lirik);
$lirik = str_replace("u", "o", $lirik);
$lirik = str_replace("e", "o", $lirik);

echo "$lirik";


?>