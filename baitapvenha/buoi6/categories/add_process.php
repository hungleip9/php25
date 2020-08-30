<?php 
include "connect.php";

$data = $_POST;

	$query="INSERT INTO `categories`(`name`, `parent_id`,`thumbnail`, `slug`, `description`, `created_at`) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['thumbnail']."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";

		$status = $conn->query($query);
		header("Location: categories.php");

 ?>