<?php 
	for ($i=1; $i <= 7; $i++) { 
		for ($y=1; $y <= 7 ; $y++) { 
			if ($i>=$y) {
				echo "&nbsp&nbsp&nbsp&nbsp";
			}else{
				echo "* &nbsp";
			}
				
		}

		echo "<br>";
		}
	
?>