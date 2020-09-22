<?php 
	require_once"phpmailer.php";
	
	$data = $_POST;
	$email=$_POST['email'];
	$name=$_POST['name'];
	send_email($email,$name);
	
 ?>