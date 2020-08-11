<!DOCTYPE html>
<html>
<head>
	<title>1.1</title>
	<link rel="stylesheet" href="css/1.1.css">
</head>

<body>
	<div class="container">
		<h2>Bai 1.1</h2>
		<?php 
	echo "Giai phuong trinh bac nhat 2x^2 - 7x + 3 = 0<br>";

	$a=2;
	$b=-7;
	$c=3;
	$delta=$b*$b-4*($a*$c);
	if($a+$b+$c=0){
		$x1=1;$x2=$c/$a;
	}
	if($delta<0){
			echo "phuong trinh vo nghiem";
	}else if($delta==0){
		$x=(-$c)/$b;
		echo "phuong trinh co nghiem kep x = ".$x;
	}
	else{
		$x1=( -$b + sqrt ($delta))/(2*$a);
		$x2=( -$b - sqrt ($delta))/(2*$a);

		echo "Phuong trinh co 2 nghiem lan luot la : ".$x1." va ".$x2;
	}


 ?>
	</div>
</body>
</html>
