<!DOCTYPE html>
<html>
<head>
	<title>Bai 2.2</title>
	<link rel="stylesheet" href="css/2.6.css">
</head>
<body>
	<div class="content">
		<h2>Bai 2.2</h2>
		<?php
		$arr = array(1,4,2,6,9,100,4);
		$arr_rv = array_reverse($arr, true);
		echo "Mảng ban đầu : ";
		foreach ($arr as $key => $value) {
			echo $value . ",";
		}
		echo "<br> Mảng sau khi đảo ngược : ";
		foreach ($arr_rv as $key => $value) {
			echo $value . ",";
		}
		?>
	</div>
</body>
</html>

