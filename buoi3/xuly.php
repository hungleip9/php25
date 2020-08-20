<?php 
	// session_start();
	// // $_SESSION['name']='hung';
	// // $_SESSION['tuoi']='25';
	// $user=['hung','25','1998'];
	// $_SESSION['user']= $user;
	// // cach xoa session
	// // unset($_SESSION['user']);
	// // session_destroy();
	// // <------>
	
	setcookie('msg', 'Đăng nhập thành công', time()+5);
	$test=$_COOKIE['msg'];
	echo $test;
	// print_r($_SESSION);
	
	

	


	// echo "ten dang nhap: " . $_POST['user'] . "<br>";
	// echo "password: " . $_POST['pass'];

 ?>