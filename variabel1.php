<!DOCTYPE html>
<html lang="en">

<head>
	<title>Demo Variabel</title>
</head>
<body>
	<?php
		print("menggunakan 'echo' <br>");
		// Deklarasi dan inisialisasi
		$bil = 3;
		echo $bil;
		print("<br>");

		print("<br> menggunakan 'var_dump()' <br>");
		$bil = 315;
		var_dump($bil);
		// Output: int(315)
		print("<br>");
		$var = "haloo";
		var_dump($var);
		// Output: string(5) "haloo"
		print("<br>");
		$var = null;
		var_dump($var);
		// Output: NULL
	?>
</body>
</html>