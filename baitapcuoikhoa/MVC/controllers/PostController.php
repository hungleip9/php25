<?php 
require_once"model/Post.php";
require_once"controllers/BaseController.php";
	class PostController extends BaseController{
		function __construct(){
			$this->model = new Post();
			}
		
		function index(){
			$post = $this->model->getAll();
			$this->view("post/list.php",
				["post"=>$post,]);
		}
		function add(){
			$this->view("post/add.php");
		}
		function store(){
			$data=$_POST;
			$data['slug'] = $this->toSlug($data['title']);
			$result = $this->model->Store($data);
			if ($result) {
				setcookie("msg","Tạo Mới Thành công",time() + 3);
				header("location:index.php?mod=post&act=list");
			}else{
				setcookie("msg","Tạo Mới Thất Bại",time() + 3);
				header("location:index.php?mod=post&act=add");
			}
		}
		function detail(){
			$id=$_GET['id'];
			$post=$this->model->detailPost($id);
			$this->view("post/detail.php",
				["post"=>$post,]);
		}
		function delete(){
			$id=$_GET['id'];
			$post=$this->model->deletePost($id);
			if ($post) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location:index.php?mod=post&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location:index.php?mod=post&act=add");
			}
			header("location:index.php?mod=post&act=list");
		}
		public function edit(){	
			$id=$_GET['id'];
			$post=$this->model->editPost($id);
			$this->view("post/edit.php",["post"=>$post,]);
		}
		public function update(){
			$data['slug'] = $this->toSlug($data['title']);
			$data = $_POST;
			$id = $_POST['id'];
			
			$result = $this->model->Update($data, $id);
			if ($result) {
				setcookie("msg","Sửa Thành công",time() + 3);
				header("location:index.php?mod=post&act=list");
			}else{
				setcookie("msg","Sửa Thất Bại",time() + 3);
				header("location:index.php?mod=post&act=add");
			}
			header("location:index.php?mod=post&act=list");
		}
		
	}
	
 ?>