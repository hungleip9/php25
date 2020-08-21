<?php 

	include 'upload2.php';

	if (isset($_POST['submit'])) {
	
		$upload = upload_file( 'uploads', 'image');

		if ($upload) { // neu upload file khong co loi
       	echo " uploaded thanh cong.";
       	
       }else{//upload file co loi
       		echo "sorry, uploaded file that bai.";
       }

	
		

	}else{
		echo "khong submit";
	}
 ?>