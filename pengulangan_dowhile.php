<!DOCTYPE html>
<html lang="en">

<head>
	<title>Loop do-while</title>
</head>
<body>
	<?php
		$i = 0;
		do {
			echo $i;
			echo " ";
			// Inkremen counter
			$i++;
		} 
		while ($i < 10);
	?>
</body>
</html>