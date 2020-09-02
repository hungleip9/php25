<?php 
    
    include '../buoi6/helper/sql.php';
    

    $data = $_GET;

    $id = $data['id'];

    $status = delete('post',$id); 
    if ($status) {
        echo "delete thanh cong";
        header("Location: post.php");

    }else{
        echo "delete khong thanh cong";
    }

 ?>