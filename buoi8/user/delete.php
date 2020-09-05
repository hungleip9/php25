<?php 
    
    include '../helper/sql.php';
    

    $data = $_GET;

    $id = $data['id'];

    $status = delete('user',$id); 
    if ($status) {
        echo "delete thanh cong";
        header("Location: user.php");

    }else{
        echo "delete khong thanh cong";
    }

 ?>
 