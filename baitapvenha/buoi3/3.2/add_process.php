<?php
	if (isset($_POST['ID'])) {
		$ID = $_POST['ID'];
	}
	if (isset($_POST['NAME'])) {
		$NAME = $_POST['NAME'];
	}
	if (isset($_POST['PHONE'])) {
		$PHONE = $_POST['PHONE'];
	}
	if (isset($_POST['EMAIL'])) {
		$EMAIL = $_POST['EMAIL'];
	}
	if (isset($_POST['GENDER'])) {
		$GENDER = $_POST['GENDER'];
	}
	if (isset($_POST['ADR'])) {
		$ADR = $_POST['ADR'];
	}
	
	session_start();
	

	$_SESSION['info'][$ID]=[
		'ID'=>$ID,
		'NAME'=>$NAME,
		'PHONE'=>$PHONE,
		'EMAIL'=>$EMAIL,
		'GENDER'=>$GENDER,
		'ADR'=>$ADR,
	];
	
	setcookie("msg", "Thêm thành công !", time()+3);
	header('location: list.php');
?>