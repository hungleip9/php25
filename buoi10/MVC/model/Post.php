<?php 
	include_once "Model.php";

	class Post extends Model{
		var $table = "post";
		function getAll(){
			return $this->select($this->table);
			
		}
		function  detailPost($id){
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