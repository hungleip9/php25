<?php 
//thong so ket noi CSDL

	$servername = "localhost";

	$username ="root";

	$password ="";

	$dbname ="blog"; //ten co so du lieu muon ket noi den

	//tao ket noi CSDL
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_errno){
		echo "Failed to connect to MySql: ". $conn->connect_error;
		exit();
	}
	
 ?>