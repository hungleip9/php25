<?php 
	include '../helper/sql.php';
	$conn = connect();

	$data = $_POST;

	$id = $data['id'];

	$status = edit('user',$data,$id);
	if ($status) {
		header("Location: user.php");
	}else{
		echo "update khong thanh cong";
	}
	
 ?>