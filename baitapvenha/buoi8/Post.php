<?php 
	
	class Post{

		public $title;
		public $url;
		public $discription;
		public $content;

		function __construct($title,$url,$discription,$content){
			$this->title= $title;
			$this->url= $url;
			$this->discription= $discription;
			$this->content= $content;
		}
		function InTT(){
			echo "Thong tin danh muc";
			echo "<br> Tieu de: $this->title";
			echo "<br> Duong dan: $this->url";
			echo "<br> Mo ta: $this->discription";
			echo "<br> Noi dung: $this->content";
		}
	}
	$post = new Post("Thoi su","24h.com","Khong co mo ta","Khong co noi dung");
	$post -> InTT();



 ?>