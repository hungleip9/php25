<?php 
	
	include "connect.php";

	$data = $_POST;

	$id = $data['id'];

	
	$query= "DELETE FROM `categories` WHERE id = ".$id;

	// echo $query;

	// die();
	$status = $conn->query($query);
	if ($status) {
		echo "delete thanh cong";
		header("Location: categories.php");

	}else{
		echo "delete khong thanh cong";
	}

 ?>
 