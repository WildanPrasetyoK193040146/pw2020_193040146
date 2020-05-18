<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>

		<?php

			$b=1;
			while ($b <=5) {
				echo "<tr>";
				
				if($b %2) {
					for ($k =1; $k <=5; $k++) { 
						echo "<td>Baris $b,kolom $k</td>";
						
					}
				}else{
					for ($k=1; $k <=5; $k++) {
					echo "<td>&nbsp;</td>"; 
						
					}
				}

				echo "</tr>";
				$b++;

			}

		?>
		
	</table>
</body>
</html>