<?php 
	include '../buoi6/helper/sql.php';
	$conn = connect();
	//lay du lieu
	$data = $_POST;
	// print_r($data);
	// die();
	// $query="INSERT INTO `user`(`name`, `email`,`avatar`, `created_at`) VALUES ('".$data['name']."','".$data['email']."','".$data['avatar']."','".$data['created_at']."')";
	
	$status = insert('post',$data);





	//thuc thi cau lenh
		
		header("Location: post.php");
 ?>