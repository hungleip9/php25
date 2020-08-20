
<?php 
$_GET=[
  'course'=>'PHP',
  'class'=> 6
];
if(isset($_GET['course'])){

    $course = $_GET['course']; // Lấy dữ liệu lưu vào biến

    echo $course;
}

if(isset($_GET['class'])){

    echo $_GET['class'];  // In trực tiếp dữ liệu

}

 ?>