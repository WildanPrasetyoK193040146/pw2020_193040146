<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$keras = array();

		$keras[] = "Motherboard";
		$keras[] = "Processor";
		$keras[] = "Hardisk";
		$keras[] = "PC Coller";
		$keras[] = "VGA Card";
		$keras[] = "SSD";

?>
	<ol>
		<?php

			for ($i=0; $ < count($keras); $++) { 
					echo "<li>$keras[$i]</li>";
			}
		?>
	</ol>
</body>
</html>



