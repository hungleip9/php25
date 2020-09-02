<?php 
	include '../buoi6/helper/sql.php';
	$conn = connect();

	$data = $_POST;
	
	$id = $data['id'];

	$status = edit('post',$data,$id);
	if ($status) {
		header("Location: post.php");
	}else{
		echo "update khong thanh cong";
	}
	
 ?>