<!DOCTYPE html>
<html>
<head>
	<title>Bai 2.4</title>
	<link rel="stylesheet" href="css/2.6.css">
</head>
<body>
	<div class="content">
		<h2>Bai 2.4</h2>
		<?php
		$name = "&nbsp&nbsp vU vAN tHuOnG &nbsp&nbsp";

	$name = strtolower($name); // chuyen hoa cac ky  tu trong chuoi ve kieu in thuong
	$name = ucwords($name); // In hoa ky tu dau tien trong chuoi
	$name = trim($name, "&nbsp&nbsp");
	echo "Chuỗi sau khi chuẩn hóa : " . $name .".";
	
	?>
	</div>
</body>
</html>
