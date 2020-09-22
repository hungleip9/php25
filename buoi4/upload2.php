<?php 

	function upload_file($target_dir, $input_name, $max_size = null, $formats_allowed_array = null){

		$uploadOk = 1;

		


		$target_file = $target_dir . '/' .basename($_FILES[$input_name]["name"]);
		
		
		
		
		
		


		return $target_file;
	}

 ?>