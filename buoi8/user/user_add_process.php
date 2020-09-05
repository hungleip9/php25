<?php 
	include '../helper/sql.php';
	$conn = connect();
	//lay du lieu
	$data = $_POST;
	
	// $query="INSERT INTO `user`(`name`, `email`,`avatar`, `created_at`) VALUES ('".$data['name']."','".$data['email']."','".$data['avatar']."','".$data['created_at']."')";
	
	$status = insert('user',$data);





	//thuc thi cau lenh
		
		header("Location: user.php");
 ?>