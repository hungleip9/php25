<?php 
	
include '../helper/connect.php';

	$data = $_GET;
	

	$id = $data['id'];

	
	$query= "DELETE FROM `user` WHERE id = $id";

	// echo $query;

	// die();
	$conn = connect();
	$status = $conn->query($query);
	if ($status) {
		echo "delete thanh cong";
		header("Location: user.php");

	}else{
		echo "delete khong thanh cong";
	}

 ?>
 