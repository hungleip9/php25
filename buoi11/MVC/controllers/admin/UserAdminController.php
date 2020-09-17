<?php 
require_once "controllers/admin/AdminController.php";
require_once"model/User.php";
require_once 'controllers/BaseController.php';
class UserAdminController extends AdminController{
	protected $model;
	function __construct(){
			$this->model = new User();
		}
		function index(){
			$user = $this->model->getAll();
			$this->view("admin/user/list.php",
				["user"=>$user,]);
		}
		function add(){
			
			$this->view("admin/user/add.php");
		}
		function store(){
			$data = $_POST;
			
			$result = $this->model->Store($data);
			$this->redirect('c=user&mod=admin&act=index');
		}
		function detail(){
			$id = $_GET['id'];
			$user = $this->model->detailUser($id);
			$this->view("admin/user/detail.php",
				["user"=>$user,]);

		}
		public function delete(){
			$id=$_GET['id'];
			
			$user=$this->model->deleteUser($id);
			$this->redirect('c=user&mod=admin&act=index');
		}
		public function edit(){	
			$id=$_GET['id'];
			$user=$this->model->editUser($id);
			$this->view("admin/user/edit.php",["user"=>$user,]);
		}
		public function update(){
			$data = $_POST;
			$id = $_POST['id'];
			
			$result = $this->model->Update($data, $id);
			$this->redirect('c=user&mod=admin&act=index');
		}
}

 ?>