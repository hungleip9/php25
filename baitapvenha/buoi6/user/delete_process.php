<?php 
	
	include "connect.php";

	$data = $_POST;

	$id = $data['id'];

	
	$query= "DELETE FROM `user` WHERE id = ".$id;

	// echo $query;

	// die();
	$status = $conn->query($query);
	if ($status) {
		echo "delete thanh cong";
		header("Location: user.php");

	}else{
		echo "delete khong thanh cong";
	}

 ?>
 