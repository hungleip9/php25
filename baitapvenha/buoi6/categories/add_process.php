<?php 
include '../helper/sql.php';

	$data = $_POST;

	$status = insert('categories',$_POST);
	// $query="INSERT INTO `categories`(`name`, `parent_id`,`thumb_nail`, `slug`, `description`, `created_at`) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['thumb_nail']."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";
	// 	$conn = connect();
	// 	$status = $conn->query($query);
		header("Location: categories.php");

 ?>