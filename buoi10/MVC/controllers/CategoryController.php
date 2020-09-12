<?php 
	require_once"model/Category.php";
	require_once"controllers/BaseController.php";
	class CategoryController extends BaseController{
		
		public function list(){

			$model = new Category();
			$categories=$model->getAll();
			// var_dump($categories);
			// die();
			// require_once"view/category/list.php";
			$this->view("category/list.php",
				["categories"=>$categories,]);
			

		}
		public function create(){
			$this->view();
		}
		public function store(){
			//code
			$this->redirect('index.php?mod=category&act=list');
		}
		public function edit(){	
		}
		public function detail(){
			$id=$_GET['id'];

			$model = new Category();
			$category=$model->getId($id);

			$this->view("category/detail.php",
				["category"=>$category,]);
		}
		public function add(){

			$this->view("category/add.php");
		}
		public function delete(){

		}
	}

 ?>