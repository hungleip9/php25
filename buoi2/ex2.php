<?php 
	//function cua ham
// Số cần kiểm tra
$number = 12;
$ket_qua= kiem_tra_so_chan($number);
if ($ket_qua == 2){
    echo 'Số chẵn';
}
else if ($ket_qua == 1){
    echo 'Số lẽ';
}else{
	echo "khong xac dinh";
}

function kiem_tra_so_chan($number)
{
    if ($number % 2 == 0)
        return 2;
    else return 1;
}
echo "<br>";
// tinh tong
	//cach 1
function tinh_tong($a, $b, $c, $e, $f = 0){

	return $a + $b + $c + $e;

}
	//cach 2
$tong=1;

function tinh_tong2($arr){
	global $tong;
	foreach ($arr as $number) {
		$tong += $number;
	}return $tong;
}
tinh_tong2([1,2,3,4]);
echo "Tong bang : " . $tong;



 ?>