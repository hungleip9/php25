<?php 
	require_once"model/Category.php";

	class CategoryController{
		
		public function list(){

			$model = new Category();
			$categories=$model->getAll();
			// var_dump($categories);
			// die();
			require_once"view/category/list.php";
		}
		public function create(){

		}
		public function edit(){
			$id=$_GET['id'];
			$model = new Category();
			$category=$model->getIdEdit($id);
			require_once"view/category/edit.php";
			
		}
		public function detail(){
			$id=$_GET['id'];

			$model = new Category();
			$category=$model->getId($id);

			require_once"view/category/detail.php";
		}
		public function add(){
			$model = new Category();
			$category=$model->add();
			require_once"view/category/add.php";
		}
	}

 ?>