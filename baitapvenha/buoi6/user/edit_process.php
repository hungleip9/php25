<?php 
include '../helper/connect.php';

	$data = $_POST;

	$id = $data['id'];

	$query = "UPDATE user SET name='".$data['name']."', email= '". $data['email']."', avatar= '". $data['avatar']."', created_at= '". $data['created_at']."' WHERE id = ".$id;
	// echo $query;
	// die();
	$conn = connect();
	$status = $conn->query($query);
	if ($status) {
		header("Location: user.php");
	}else{
		echo "update khong thanh cong";
	}
	
 ?>