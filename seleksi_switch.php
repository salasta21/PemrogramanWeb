<!DOCTYPE html>
<html lang="en">

<head>
	<title>Seleksi switch</title>
</head>
<body>
	<?php
		print("dengan if else <br>");
		$i = 2;
		if ($i == 0) {
			echo "i equals 0";
		} elseif ($i == 1) {
			echo "i equals 1";
		} elseif ($i == 2) {
			echo "i equals 2";
		}

		print("<br>");
		print("<br> dengan switch <br>");
		// Ekuivalen, dengan pendekatan switch
		switch ($i) {
			case 0:
				echo "i equals 0";
				break;
			case 1:
				echo "i equals 1";
				break;
			case 2:
				echo "i equals 2";
				break;
		}
	?>
</body>
</html>