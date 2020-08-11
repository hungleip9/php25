<?php 
	$a = 15;
	
	if ($a>0 && $a<=7) {
		$tuan=1;
	}else if ($a>7 && $a<=14) {
		$tuan=2;
	}else if ($a>14&& $a<=21) {
		$tuan=3;
	}else if ($a>21&& $a<=28) {
		$tuan=4;
	}else if ($a>28&& $a<=30) {
		$tuan=5;
	}else{
		echo "khong dung";
	}
	switch ($tuan) {
		case 1:{

			echo "day la tuan dau tien";
			}
			break;
		case 2:{
			echo "day la tuan thu 2";
			}
			break;
		
		case 3:{
			echo "day la tuan thu 3";
			}
			break;
		case 4:{
			echo "day la tuan thu 4";
			}
			break;
		
		case 5:{
			echo "day la tuan thu 5";
			}
			break;
		
		default:{
			echo "khong dung";
			}
			break;
	}












 ?>