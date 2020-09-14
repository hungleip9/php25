<?php 
session_start();
if($_SESSION['login'] == true){
	echo "day la home";
}else{
	header('Location:login_from.php');
}

 ?>
 <a href="profile.php">Profile</a>
  <a href="logout.php">Logout</a>