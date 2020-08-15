<!DOCTYPE html>
<html>
<head>
	<title>Bai 2.5</title>
	<link rel="stylesheet" href="css/2.6.css">
</head>
<body>

	<div class="content">
		<h2>Bai 2.5</h2>
		<?php

		$name ="Lê Quang Hùng";
		echo $name . "<br>";

		$data = explode(" ",$name);
		$n = count($data);
		$tendem= "";
		echo "Họ : " . $data[0] ." - ";




		for( $i = 1; $i < ($n-1); $i++){

			$tendem = $data[$i];
		}
		echo "Tên Đệm : ". $tendem . " - ";
		echo "Tên : " . $data[$n-1];
		?>
			
	</div>
</body>
</html>
