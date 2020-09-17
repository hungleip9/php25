<?php 
require_once "controllers/admin/AdminController.php";
require_once 'controllers/BaseController.php';
class HomeAdminController extends AdminController{
	public function index(){
			
			$this->view("home/list.php");
		}
	}
 ?>