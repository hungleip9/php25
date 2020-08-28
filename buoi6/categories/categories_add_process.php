<?php 
var_dump($_POST);

	//thong so ket noi CSDL

	$servername = "localhost";

	$username ="root";

	$password ="";

	$dbname ="php25_blog"; //ten co so du lieu muon ket noi den

	//tao ket noi CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_errno){
		echo "Failed to connect to MySql: ". $conn->connect_error;
		exit();
	}
	//lay du lieu 
	$data=$_POST;

	// viet cau lenh them du lieu
	$query = "INSERT INTO categories (name, description) VALUES ('".
		$data['name']."','". $data['description']."')";
	// echo $query;

	//thuc thi cau lenh
		$status = $conn->query($query);
	header("Location: categories.php");

 ?>