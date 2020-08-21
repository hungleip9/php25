<?php 

	function upload_file($target_dir, $input_name, $max_size = null, $formats_allowed_array = null){

		$uploadOk = 1;

		$error_arr = array();


		$target_file = $target_dir . '/' .basename($_FILES[$input_name]["name"]);

		if (file_exists($target_file)){
			$error_arr[]= "Sorry, file already exists.";
			$uploadOk = 0;
		}
		if ($uploadOk == 1) {
			$upload = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			if (!$upload) {
				$error_arr[] = 'upload fail';
			}
		}
		
		


		return $error_arr;
	}

 ?>