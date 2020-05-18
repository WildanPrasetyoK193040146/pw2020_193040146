<?php

$lirik = 
"Balonku ada lima <br>
rupa rupa warnanya<br>
hijau, kuning, kelabu<br>
merah muda dan biru<br>
meletus balon hijau DORRR!!<br>
hatiku sangat kacau<br>
balonku tinggal empat<br>
ku pegang erat erat";

$lirik = str_replace("a", "o", $lirik);
$lirik = str_replace("u", "o", $lirik);
$lirik = str_replace("i", "o", $lirik);
$lirik = str_replace("e", "o", $lirik);

echo "$lirik";

?>		
