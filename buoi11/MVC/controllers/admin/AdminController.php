<?php 
	class AdminController
	{
		public function __construct(){
			if($_SESSION['login'] != true){
				header('Location:index.php?c=auth&mod=admin&act=login');
			}
		}
		
	}


 ?>