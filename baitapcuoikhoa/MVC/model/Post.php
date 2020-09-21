<?php 
	include_once "model/Model.php";

	class Post extends Model{
		protected $table = "post";
		function getAll(){
			return $this->select($this->table);		
		}
		function getId($id){
			return $this->detail($this->table,$id);	
		}
		function deletePost($id){
			
			return $this->delete($this->table,$id);
		}
		function editPost($id){
			return $this->edit($this->table,$id);
		}
	}


 ?>