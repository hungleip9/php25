<?php 
	include 'connect.php';

	$data = $_POST;

	$id = $data['id'];

	$query = "UPDATE categories SET name='".$data['name']."', description= '". $data['description']."' WHERE id = ".$id;
	// echo $query;
	$status = $conn->query($query);
	if ($status) {
		header("Location: categories.php");
	}else{
		echo "update khong thanh cong";
	}
	
 ?>