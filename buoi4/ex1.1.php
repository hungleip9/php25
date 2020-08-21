<?php 
	if (isset($_POST['submit'])) {
	// var_dump($_FILES);

		echo "submit ";
		// buoc 1
		$target_dir = "uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["image"]["name"]); // link sẽ upload file lên

        // echo $target_file;
        //buoc 2
       $upload = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); // lấy file từ thư mục tạm sang thư mục tự khởi tạo

       // var_dump($upload);
       
       //buoc 3

       if ($upload) { // neu upload file khong co loi
       	echo "The file ". basename( $_FILES["image"]["name"]). " uploaded thanh cong.";
       	
       }else{//upload file co loi
       		echo "sorry, uploaded file that bai.";
       }

	}else{
		echo "khong submit";
	}
 ?>