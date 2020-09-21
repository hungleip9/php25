<?php 
require_once "controllers/admin/AdminController.php";
require_once"model/Post.php";
require_once 'controllers/BaseController.php';
class PostAdminController extends AdminController{
	protected $model;
	function __construct(){
			$this->model = new Post();
		}
	public function index(){
			$post=$this->model->getAll();
			$this->view("admin/post/list.php",
				["post"=>$post,]);
		}
	public function store(){
			$data = $_POST;
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
			$this->redirect('c=post&mod=admin&act=index');
		}
		
		public function edit(){	
			$id=$_GET['id'];

			
			$post=$this->model->editpost($id);
			$this->view("admin/post/edit.php",["post"=>$post,]);
		}
		public function editnoidung(){	
			$id=$_GET['id'];

			
			$post=$this->model->editpost($id);
			$this->view("admin/post/editnoidung.php",["post"=>$post,]);
		}
		public function editYNghia(){	
			$id=$_GET['id'];

			
			$post=$this->model->editpost($id);
			$this->view("admin/post/editYNghia.php",["post"=>$post,]);
		}
		public function editCaiKet(){	
			$id=$_GET['id'];

			
			$post=$this->model->editpost($id);
			$this->view("admin/post/editCaiKet.php",["post"=>$post,]);
		}
		public function update(){
			$link=null;
			$data = $_POST;
			$id = $_POST['id'];
			// var_dump($_FILES["file"]["name"]);
			// die();
			$targetDir = "xuly/images/";
			$fileName = isset($_FILES["file"]["name"]) ? basename($_FILES["file"]["name"]) : null;
			$fileName2 = isset($_FILES["file2"]["name"]) ? basename($_FILES["file2"]["name"]) : null;
			$fileName3 = isset($_FILES["file3"]["name"]) ? basename($_FILES["file3"]["name"]) : null;
			$fileName4 = isset($_FILES["file4"]["name"]) ? basename($_FILES["file4"]["name"]) : null;
			$fileName5 = isset($_FILES["file5"]["name"]) ? basename($_FILES["file5"]["name"]) : null;

			$link = $fileName!=null ? $targetDir . $fileName : null;

			$link2 = $fileName2!=null ? $targetDir . $fileName2 : null;
			$link3 = $fileName3!=null ? $targetDir . $fileName3 : null;
			$link4 = $fileName4!=null ? $targetDir . $fileName4 : null;
			$link5 = $fileName5!=null ? $targetDir . $fileName5 : null;
			
			$upload = move_uploaded_file($_FILES["file"]["tmp_name"], $link);
			$upload2 = move_uploaded_file($_FILES["file2"]["tmp_name"], $link2);
			$upload3 = move_uploaded_file($_FILES["file3"]["tmp_name"], $link3);
			$upload4 = move_uploaded_file($_FILES["file4"]["tmp_name"], $link4);
			$upload5 = move_uploaded_file($_FILES["file5"]["tmp_name"], $link5);
			$result = $this->model->Update($data, $id,$link,$link2,$link3,$link4,$link5);
			$this->redirect('c=post&mod=admin&act=index');
		}
		public function detail(){
			$id=$_GET['id'];

			
			$post=$this->model->getId($id);

			$this->view("admin/post/detail.php",
				["post"=>$post,]);
		}
		public function add(){

			$this->view("admin/post/add.php");
		}
		public function delete(){
			$id=$_GET['id'];
			
			$categoies=$this->model->deletepost($id);
			$this->redirect('c=post&mod=admin&act=index');
		}
	}

 ?>