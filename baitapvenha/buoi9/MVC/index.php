<?php 
	$mod = $_GET['mod'];
	$act = $_GET['act'];
	
	
	

	$class = ucfirst($mod) . "Controller";
	$pash = "controllers/".$class.".php";
	
	require_once $pash;
	// require_once "controllers/PostController.php";
	
	$controller_obj = new $class();
	// $controller_obj = new CategoryController();
	$controller_obj->$act();
	// $controller_obj->list();

	
	
 ?>