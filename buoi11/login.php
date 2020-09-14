<?php 
	session_start();
	$db_username="hung";
	$db_password='123456';

	$username=$_POST['username'];
	$password=$_POST['password'];

	if ($db_username==$username&&$db_password==$password) {
		$_SESSION['login'] = true;
		echo "Dang nhap thanh cong";
		header('Location:home.php');
	}else{
		$_SESSION['login'] = fales;
		
		header('Location:login_from.php');
	}
 ?>