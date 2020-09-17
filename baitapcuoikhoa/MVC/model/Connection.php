<?php 
	class Connection{
		var $servername;
		var $username;
		var $password;
		var $dbname;

		function __construct(){
			$this->servername = "localhost";
			

			$this->username ="root";

			$this->password ="";

			$this->dbname ="blog"; //ten co so du lieu muon ket noi den
		}

		public function connect(){
		

		//tao ket noi CSDL
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if($conn->connect_errno){
			echo "Failed to connect to MySql: ". $conn->connect_error;
			exit();
		}
		return $conn;
		}
	}

 ?>