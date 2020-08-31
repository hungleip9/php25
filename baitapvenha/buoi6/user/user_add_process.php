<?php 
include '../helper/sql.php';
	//lay du lieu
	$data = $_POST;
	$status = insert('user',$data);
	// var_dump($data);
	// die();
	// $query="INSERT INTO `user`(`name`, `email`,`avatar`, `created_at`) VALUES ('".$data['name']."','".$data['email']."','".$data['avatar']."','".$data['created_at']."')";
	// echo $query;

	// die();
	//thuc thi cau lenh
		// $conn = connect();
		// $status = $conn->query($query);
		header("Location: user.php");

 ?>