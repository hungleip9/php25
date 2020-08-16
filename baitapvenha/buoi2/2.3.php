<!DOCTYPE html>
<html>
<head>
	<title>Bai 2.3</title>
	<link rel="stylesheet" href="css/2.6.css">
</head>
<body>
    <div class="content">
    	<h2>Bai 2.3</h2>
    	<?php 
    	$arr = array(1,4,2,6,9,100,4);
    	
    	echo "Ham chua sap xep : " ;
    	foreach ($arr as $key => $value) {
			echo $value . " , ";
		}
		sort($arr);
    	echo "<br>Ham da sap xep : ";
    	foreach( $arr as $c) {
    		echo "$c , ";
    	}
    	?>
	</div>
</body>
</html>

