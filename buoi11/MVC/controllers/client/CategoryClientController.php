<?php 
require_once "controllers/admin/AdminController.php";
require_once"model/Category.php";
require_once 'controllers/BaseController.php';
class CategoryClientController extends AdminController{
	protected $model;
	function __construct(){
			$this->model = new Category();
		}
	public function index(){
			$categories=$this->model->getAll();
			$this->view("client/category/list.php",
				["categories"=>$categories,]);
		}
	public function store(){
			$data = $_POST;
			
			$result = $this->model->Store($data);
			$this->redirect('c=category&mod=admin&act=index');
		}
		
		public function edit(){	
			$id=$_GET['id'];

			
			$category=$this->model->editCategory($id);
			$this->view("client/category/edit.php",["category"=>$category,]);
		}
		public function update(){
			$data = $_POST;
			$id = $_POST['id'];
			
			$result = $this->model->Update($data, $id);
			$this->redirect('c=category&mod=admin&act=index');
		}
		public function detail(){
			$id=$_GET['id'];

			
			$category=$this->model->getId($id);

			$this->view("client/category/detail.php",
				["category"=>$category,]);
		}
		public function add(){

			$this->view("client/category/add.php");
		}
		public function delete(){
			$id=$_GET['id'];
			
			$categoies=$this->model->deleteCategory($id);
			$this->redirect('c=category&mod=admin&act=index');
		}
	}

 ?>