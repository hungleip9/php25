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
			$email=$_POST['email'];
			$name=$_POST['name'];  
			$targetDir = "xuly/images/";			
			$fileName = basename($_FILES["file"]["name"]);
			$fileName2 = basename($_FILES["file2"]["name"]);
			$fileName3 = basename($_FILES["file3"]["name"]);
			$fileName4 = basename($_FILES["file4"]["name"]);
			$fileName5 = basename($_FILES["file5"]["name"]);
			$link = $targetDir . $fileName;
			$link2 = $targetDir . $fileName2;
			$link3 = $targetDir . $fileName3;
			$link4 = $targetDir . $fileName4;
			$link5 = $targetDir . $fileName5;
			
			$upload = move_uploaded_file($_FILES["file"]["tmp_name"], $link);
			$upload2 = move_uploaded_file($_FILES["file2"]["tmp_name"], $link2);
			$upload3 = move_uploaded_file($_FILES["file3"]["tmp_name"], $link3);
			$upload4 = move_uploaded_file($_FILES["file4"]["tmp_name"], $link4);
			$upload5 = move_uploaded_file($_FILES["file5"]["tmp_name"], $link5);
			$result = $this->model->Store($data,$link,$link2,$link3,$link4,$link5);
			$result2 =$this->model->send_email($email,$name);
			
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				$this->redirect('c=auth&mod=admin&act=login');
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				$this->redirect('c=user&mod=admin&act=add');
			}
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
		public function addAD(){
			$user = $this->model->getAll();
			$this->view("admin/user/addAD.php",["user"=>$user]);
		}
		
		
}

 ?>