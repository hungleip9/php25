<?php 
	include '../helper/connect.php';

	$data = $_POST;

	$id = $data['id'];

	$query = "UPDATE categories SET name='".$data['name']."', parent_id= '". $data['parent_id']."', thumb_nail= '". $data['thumb_nail']."', slug= '". $data['slug']."', description= '". $data['description']."', created_at= '". $data['created_at']."' WHERE id = ".$id;
	// echo $query;
	// die();
	$conn = connect();
	$status = $conn->query($query);
	if ($status) {
		header("Location: categories.php");
	}else{
		echo "update khong thanh cong";
	}
	
 ?>