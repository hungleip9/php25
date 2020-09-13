<?php 
	require_once"model/Category.php";
	require_once"controllers/BaseController.php";
	class CategoryController extends BaseController{
			function __construct(){
			$this->model = new Category();
			}
		public function list(){

			
			$categories=$this->model->getAll();
			$this->view("category/list.php",
				["categories"=>$categories,]);
			

		}
		public function store(){
			$data = $_POST;
			
			$result = $this->model->Store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				header("location:index.php?mod=category&act=list");
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				header("location:index.php?mod=category&act=add");
			}
		}
		
		public function edit(){	
			$id=$_GET['id'];

			
			$category=$this->model->editCategory($id);
			$this->view("category/edit.php",["category"=>$category,]);
		}
		public function update(){
			$data = $_POST;
			$id = $_POST['id'];
			
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location:index.php?mod=category&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location:index.php?mod=category&act=add");
			}
			header("location:index.php?mod=category&act=list");
		}
		public function detail(){
			$id=$_GET['id'];

			
			$category=$this->model->getId($id);

			$this->view("category/detail.php",
				["category"=>$category,]);
		}
		public function add(){

			$this->view("category/add.php");
		}
		public function delete(){
			$id=$_GET['id'];
			
			$categoies=$this->model->deleteCategory($id);
			if ($categoies) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location:index.php?mod=category&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location:index.php?mod=category&act=add");
			}
			header("location:index.php?mod=category&act=list");
			



		}
	}

 ?>