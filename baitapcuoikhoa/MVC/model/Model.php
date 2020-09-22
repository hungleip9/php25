<?php 
include_once "Connection.php";
	class Model{
		protected $table;
		var $conn;

		function __construct(){
			$connection = new Connection();
			$this->conn = $connection->connect();
		}

		function select($table){
		
		$query = "SELECT * FROM $table";
		$result = $this->conn->query($query);
		//tao 1 mang de lay du lieu

		$data = array();
			while($row = $result -> fetch_assoc()){
				$data[] = $row;
		}
		return $data;
	}	

	function detail($table,$id){
		$query = "SELECT * FROM $table WHERE id =$id";
		// $conn = connect();
		//thuc thi cau lenh
		$result = $this->conn->query($query);
		$data = $result->fetch_assoc();
		// var_dump($data);
		// die();
		return $data;


	}

	function delete($table,$id){
		$query= "DELETE FROM `$table` WHERE id = $id";

		$status = $this->conn->query($query);
		return $status;
	}
	function Store($data,$link,$link2,$link3,$link4,$link5){
		$query = "INSERT INTO $this->table(";
			foreach ($data as $key => $value) {
				$query .= $key . ",";
			}
			$query = substr_replace($query, ",file,file2,file3,file4,file5)", -1);
			$query .= " VALUES (";
			foreach ($data as $value) {
				$query .= "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, ",'$link','$link2','$link3','$link4','$link5')", -1);
			
			$result = $this->conn->query($query);

			return $result;
		
	}

	function edit($table,$id){
		// $conn = connect();

		$query = "SELECT * FROM $this->table WHERE id = " . $id;
			$result = $this->conn->query($query);
			$data = $result->fetch_assoc();
			return $data;
	}
	function Update($data, $id,$link,$link2,$link3,$link4,$link5){
			$query = "UPDATE $this->table SET ";
			foreach ($data as $key => $value) {
				$query .= $key . "=" . "'" . $value . "'" . ",";
			}
			$query = substr_replace($query, "", -1);
			if($link!=null){
			$query .= ",file='$link'";
			}if($link2!=null){
			$query .= ",file2='$link2'";
			}
			if($link3!=null){
			$query .= ",file3='$link3'";
			}if($link4!=null){
			$query .= ",file4='$link4'";
			}if($link5!=null){
			$query .= ",file5='$link5'";
			}
			$query.= " WHERE id = " . $id;
			
			$result = $this->conn->query($query);
			return $result;
		}
		function getByName($table,$username){
			
		$query = "SELECT * FROM $this->table WHERE name="."'".$username."'";
			
		$result = $this->conn->query($query);
		

		$user = $result -> fetch_assoc();
		
		return $user;
		}
		function send_email($email,$name,$contents="<h1>Chào mừng bạn đã tham gia Blog Phim<h1><img src='https://scontent.fhan5-4.fna.fbcdn.net/v/t1.15752-9/120040028_674987169790539_589320180936312246_n.png?_nc_cat=104&_nc_sid=b96e70&_nc_ohc=YLECl2X3RDsAX9MxtqH&_nc_ht=scontent.fhan5-4.fna&oh=4a9c43d0feeec3848edab33ecc43c4dc&oe=5F8EAC8E'>",$subject="Thành viên mới"){
		//https://www.google.com/settings/security/lesssecureapps
		// Khai báo thư viên phpmailer
			require "../MVC/phpmailer/PHPMailerAutoload.php";
			require "../MVC/phpmailer/class.phpmailer.php";
        // Khai báo tạo PHPMailer
			$mail = new PHPMailer();
        //Khai báo gửi mail bằng SMTP
			$mail->IsSMTP();
        //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version
			$mail->setLanguage('vi', '/optional/path/to/language/directory/');
			$mail->SMTPDebug  = 1;
			$mail->SMTPOptions = array (
				'ssl' => array(
					'verify_peer'  => false,
					'verify_peer_name'  => false,
					'allow_self_signed' => true)
			);
			$mail->CharSet="UTF-8";
        	$mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        	$mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        	$mail->Port       = 587; // cổng để gửi mail
        	$mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        	$mail->SMTPAuth   = true; //Xác thực SMTP
        	$mail->Username   = "hungleip9@gmail.com"; // Tên đăng nhập tài khoản Gmail
        	$mail->Password   = "Quanghung997"; //Mật khẩu của gmail
        	$mail->SetFrom("hungleip9@gmail.com", "Chào Mừng $name Đã Gia Nhập Vào Blog Phim"); // Thông tin người gửi
        	$mail->AddReplyTo("hungleip9@gmail.com","Thành Viên Mới: $name");// Ấn định email sẽ nhận khi người dùng reply lại.
        	$mail->AddAddress($email, $name);//Email của người nhận
        //$mail->AddCC($email_recive, $name);//Email của người nhận
        	$mail->Subject = $subject; //Tiêu đề của thư
        	$mail->MsgHTML($contents); //Nội dung của bức thư.
        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        	$mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach

        //Tiến hành gửi email và kiểm tra lỗi
        	if(!$mail->Send()) {
        		echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
        		return false;
        	} else {
        		echo "Đã gửi thư thành công!";
        		return true;
        	}
    	}
}
 ?>