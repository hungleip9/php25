<?php 
	
	class Categories{
		public $name;
		public $url;
		public $category_id;
		public $image;
		public $description;

		function __construct($name,$url,$category_id,$image,$description){
			$this->name = $name;
			$this->url = $url;
			$this->category_id = $category_id;
			$this->image = $image;
			$this->description = $description;
		}
		function InTT(){
			echo "Thong tin danh muc: ";
			echo "<br> Ten danh muc: $this->name";
			echo "<br> Dia chi lien ket: $this->url";
			echo "<br> Danh muc cha: $this->category_id";
			echo "<br> Anh dai dien: $this->image";
			echo "<br> Mo ta: $this->description";
		}

	}
	$category = new Categories("thoi su", "thoi su 24h", "AA12", "Anh1", "Khong co");
		$category -> InTT();
	
 ?>