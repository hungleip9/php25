<?php 
	class User{
		public $name;
		public $email;
		public $password;
		public $avatar;
		

		//method
		
		function __construct($name, $email, $password , $avatar){
				$this->name = $name;
				$this->email = $email;
				$this->password = $password;
				$this->avatar = $avatar;
				


		}
		function InTT(){
			echo "Thong tin Danh muc: ";
			echo "<br>- Ten danh muc: $this->name";
			echo "<br>- Email: $this->email";
			echo "<br>- Pass Word: $this->password";
			echo "<br>- Anh dai dien: $this->avatar";


		} 
	}
		$user = new User("Le Quang Hung", "hungleip9@gmail.com", "123456", "anh1");
		$user->InTT();


 ?>