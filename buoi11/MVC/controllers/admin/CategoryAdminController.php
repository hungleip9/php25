<?php 
require_once "controllers/admin/AdminController.php";
require_once"model/Category.php";
require_once"controllers/BaseController.php";
class CategoryAdminController extends AdminController{
	protected $model;
	function __construct(){
		$this->model = new Category();
	}
	public function index(){
		$categories=$this->model->getAll();
		$this->view("category/list.php",["categories"=>$categories,]);
	}
}

 ?>