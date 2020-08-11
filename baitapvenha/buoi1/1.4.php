<!DOCTYPE html>
<html>
<head>
	<title>Bai 1.4</title>
	<link rel="stylesheet" href="css/1.4.css">
</head>
<body>
	<div class="container">
		<h2>Bai 1.4</h2>
		<h4>In ra bang cuu chuong</h4>
		<?php 
		echo "Bang cuu chuong <br>";

		for ($i=2; $i <=9 ; $i++) { 
			for ($y=1; $y <=10 ; $y++) { 
				$s=$i*$y;
				echo $i." x ".$y." = ".$s."<br>";
			}
		}
		?>
	</div>
</body>
</html>

