<?php 
	
	class Post{

		public $title;
		public $url;
		public $description;
		public $content;

		function __construct($title,$url,$description,$content){
			$this->title = $title;
			$this->url = $url;
			$this->description = $description;
			$this->content = $content;
		}
		function InTT(){
			echo "Thong tin danh muc: ";
			echo "<br> Tieu de: $this->title";
			echo "<br> Duong dan: $this->url";
			echo "<br> Mo ta: $this->description";
			echo "<br> Noi dung: $this->content";
		}
	}
	$post =new Post("Phong su","Duong dan","Mo ta","Noi dung");
	$post->InTT();
	


 ?>