<!DOCTYPE html>
<html>
<head>
	<title>Bai 2.1</title>
	<link rel="stylesheet" href="css/2.6.css">
</head>
<body>
    <div class="content">
    	<h2>Bai 2.1</h2>
    	<?php 
    	$arr = array(1,4,2,6,9,100,45,8,20);
    	$max = null;


    	for($i = 0; $i < count($arr); $i++){
    		if ($max == null){
    			$max = $arr[$i];

    		}else if ($arr[$i] > $max){
    			$max = $arr[$i];

    		}
    	}
    	echo "Gia tri lon nhat trong mang vua cho la : " . $max;



    	?>
	</div>
</body>
</html>
