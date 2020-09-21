<?php 
require_once "controllers/admin/AdminController.php";
require_once"model/Category.php";
require_once 'controllers/BaseController.php';
class HomeClientController extends AdminController{
	protected $model;
	function __construct(){
			$this->model = new Category();
		}
	public function index(){
			$categories=$this->model->getAll();
			$this->view("home/index.php",
				["categories"=>$categories]);
		}
		public function detail(){
			$id=$_GET['id'];

			
			$category=$this->model->getId($id);

			$this->view("home/detail.php",
				["category"=>$category,]);
		}
	}
 ?>