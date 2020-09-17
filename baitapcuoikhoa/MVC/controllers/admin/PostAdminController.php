<?php 
require_once "controllers/admin/AdminController.php";
require_once"model/Post.php";
require_once 'controllers/BaseController.php';
class PostAdminController extends AdminController{
	protected $model;
	function __construct(){
			$this->model = new Post();
		}
	function index(){
			$post = $this->model->getAll();
			$this->view("admin/category/list.php",
				["post"=>$post,]);
		}
		function add(){
			$this->view("admin/post/post.php");
		}
		function store(){
			$data=$_POST;
			$result = $this->model->Store($data);
			$this->redirect('c=post&mod=admin&act=index');
		}
		function detail(){
			$id=$_GET['id'];
			$post=$this->model->detailPost($id);
			$this->view("admin/post/detail.php",
				["post"=>$post,]);
		}
		function delete(){
			$id=$_GET['id'];
			$post=$this->model->deletePost($id);
			$this->redirect('c=post&mod=admin&act=index');
		}
		public function edit(){	
			$id=$_GET['id'];
			$post=$this->model->editPost($id);
			$this->view("admin/post/edit.php",["post"=>$post,]);
		}
		public function update(){
			$data = $_POST;
			$id = $_POST['id'];
			
			$result = $this->model->Update($data, $id);
			$this->redirect('c=post&mod=admin&act=index');
		}
	}

 ?>