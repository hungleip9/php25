<?php 
	include 'connect.php';

	$data = $_POST;

	$id = $data['id'];

	$query = "UPDATE categories SET name='".$data['name']."', parent_id= '". $data['parent_id']."', thumbnail= '". $data['thumbnail']."', slug= '". $data['slug']."', description= '". $data['description']."', created_at= '". $data['created_at']."' WHERE id = ".$id;
	// echo $query;
	// die();
	$status = $conn->query($query);
	if ($status) {
		header("Location: categories.php");
	}else{
		echo "update khong thanh cong";
	}
	
 ?>