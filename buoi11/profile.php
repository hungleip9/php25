<?php 
session_start();
if($_SESSION['login'] == true){
	echo "day la profile";
}else{
	header('Location:login_from.php');
}
	



 ?>
  <a href="logout.php">Logout</a>