<?php 
// var_dump($_GET);
include '../helper/connect.php';
$conn = connect();
	$id = $_GET['id'];
	$id = isset($_GET['id'])?$_GET['id']:0;
$query = "SELECT * FROM user WHERE id =".$id;
// echo $query;
// die();
//thuc thi cau lenh
		$result = $conn->query($query);
		$user = $result->fetch_assoc();

	// print_r($category);
	// die();

 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">UPDATE User</h3>
    <hr>
        <form action="edit_process.php?id=<?php echo $user['id']?>" method="POST" role="form" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        	<a href="user.php" class="btn btn-primary">BACK-TO-HOME</a>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $user['avatar'] ?>">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="date" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $user['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>