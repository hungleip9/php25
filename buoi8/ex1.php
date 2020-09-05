<?php 
	
	class oto {
		var $ten;
		var $mau;
		var $hang_xe;
		var $so_cho;
		function chay(){
			echo " xe dang Chay";
		}
	}
$vinfast = new oto();
$vinfast->ten ="Vin_fast";
$vinfast->so_cho=5;
// echo $vinfast->ten;
// echo $vinfast->so_cho;
// echo $vinfast->hang_xe;

echo "<br>".$vinfast->chay();
// die();
$audi = new oto();
$audi->ten = 'audi';
$audi->so_cho= 4;
echo $audi->ten;
echo $audi->so_cho;
 ?>