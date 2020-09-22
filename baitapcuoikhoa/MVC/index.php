<?php 

	$mod = $_GET['mod'];//admin,client
	$act = $_GET['act'];//action
	$c = $_GET['c'];//controller

	session_start();
	

	$class = ucfirst($c).ucfirst($mod) . "Controller";//CategoryAdminController
	$path = "controllers/".$mod.'/'.$class.".php";
	
	require_once $path;
	// require_once "controllers/PostController.php";
	
	$controller_obj = new $class();
	// $controller_obj = new CategoryController();
	$controller_obj->$act();
	// $controller_obj->list();

	
	
 ?>