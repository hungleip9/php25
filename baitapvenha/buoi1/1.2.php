<!DOCTYPE html>
<html>
<head>
	<title>Bai 1.2</title>
	<link rel="stylesheet" href="css/1.1.css">
</head>
<body>
	<div class="container">
		<h2>Bai 1.2</h2>
		<?php 
	echo "giai phuong trinh bac nhat 2x -2 = 0<br>";

	$a=2;

	$b=-2;

	if ($a==0) {
		echo "phuong trinh co vo so nghiem";
	}else{
		$x=-$b/$a;
		echo "phuong trinh co nghiem = ".$x;
	}

 ?>
	</div>
</body>
</html>

