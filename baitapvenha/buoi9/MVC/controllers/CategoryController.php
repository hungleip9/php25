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
			$model = new Category();
			$categories=$model->getAll();
			require_once"view/category/edit.php";
			
		}
	}

 ?>