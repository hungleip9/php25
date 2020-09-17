<?php 
require_once"model/User.php";
require_once"controllers/BaseController.php";
	class UserController extends BaseController{
		function __construct(){
			$this->model = new User();
			}
		function index(){
			$user = $this->model->getAll();
			$this->view("admin/user/list.php",
				["user"=>$user,]);
		}
		function add(){
			
			$this->view("user/add.php");
		}
		function store(){
			$data = $_POST;
			
			$result = $this->model->Store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				header("location:index.php?mod=admin&c=category&act=index");
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				header("location:index.php?mod=user&act=add");
			}
		}
		function detail(){
			$id = $_GET['id'];
			$user = $this->model->detailUser($id);
			$this->view("user/detail.php",
				["user"=>$user,]);

		}
		public function delete(){
			$id=$_GET['id'];
			
			$user=$this->model->deleteUser($id);
			if ($user) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location:index.php?mod=user&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location:index.php?mod=user&act=add");
			}
			header("location:index.php?mod=user&act=list");
		}
		public function edit(){	
			$id=$_GET['id'];
			$user=$this->model->editUser($id);
			$this->view("user/edit.php",["user"=>$user,]);
		}
		public function update(){
			$data = $_POST;
			$id = $_POST['id'];
			
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location:index.php?mod=user&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location:index.php?mod=user&act=add");
			}
			header("location:index.php?mod=user&act=list");
		}

	}
	
 ?>