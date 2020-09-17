<?php 
require_once "controllers/admin/AdminController.php";
require_once 'controllers/BaseController.php';
class HomeClientController extends AdminController{
	public function index(){
			
			$this->view("home/listClient.php");
		}
	}
 ?>