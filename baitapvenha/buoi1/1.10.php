<!DOCTYPE html>
<html>
<head>
	<title>Bai 1.10</title>
	<link rel="stylesheet" href="css/1.4.css">
</head>
<body>
	<div class="container">
		<h2>Bai 1.5</h2>
		<?php 
		$n=5;
		$s=0;
		$giaithua=1;
		for ($i=1; $i <= $n ; $i++) { 
			$giaithua = $giaithua*$i;
			$s=$s + ($i / $giaithua);
		}

		echo "1/1!+1/2!+1/n! voi n = 5 => Tong = ".$s;
		?>
	</div>
</body>
</html>

