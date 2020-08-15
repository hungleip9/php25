<!DOCTYPE html>
<html>
<head>
	<title>Bai 2.6</title>
	<link rel="stylesheet" type="text/css" href="css/2.6.css">
</head>
<body>
	<div class="content">
		<h2>Bai 2.6</h2>
     <?php 	
	
	function CheckPalindrome($string){

		if ($string == strrev($string)) {
			echo $string . " la chuoi Palindrome";
		}else{
			echo $string . " khong phai la chuoi Palindrome";
		}

	}

 ?>
<div class="outpust">
	
	<?php 
		echo CheckPalindrome('noon') . "<br>";
	 ?>

</div>
</div>

</body>
</html>

